<?php

namespace App\Http\Livewire\Students\Project;

use App\Models\EduTerm;
use App\Models\File;
use App\Models\Master_department;
use App\Models\Project;
use App\Models\User;
use App\Traits\ProjectTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Redirector;
use Livewire\WithFileUploads;
use stdClass;

class Create extends Component
{
    use WithFileUploads, ProjectTrait;

    //varible
    public $form;
    public Project $project;
    public EduTerm $term;
    //file
    public $file_teacher;
    public $file_project;

    //validation
    protected array $rules = [
        "form.name_th" => "required",
        "form.name_en" => "required",
        "form.student_1.room" => "required",
        "form.student_1.department" => "required",
        "form.teacher_1" => "required",
        "form.teacher_2" => "required",
        "form.teacher_3" => "required",
        "file_project" => "required|mimes:doc,dot,pdf",
    ];

    protected array $messages = [
        "form.name_th.required" => "กรุณากรอกชื่อโครงงานภาษาไทย",
        "form.name_en.required" => "กรุณากรอกชื่อโครงงานภาษาอังกฤษ",
        "form.student_1.room" => "กรุณากรอกห้อง",
        "form.student_1.department" => "กรุณาเลือกสาขาวิชา",
        "form.teacher_1.required" => "กรุณาเลือกอาจารย์ที่ปรึกษาหลัก",
        "form.teacher_2.required" => "กรุณาเลือกอาจารย์ที่ปรึกษาร่วม",
        "form.teacher_3.required" => "กรุณาเลือกประธานสอบ",
        "file_project.required" => "กรุณาเลือกไฟล์เอกสาร",
        "file_project.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (doc,dot,pdf)",
    ];

    public function mount(): void
    {
        $this->form = collect([
            "name_th" => "",
            "name_en" => "",
            "student_1" => collect([
                "id" => Auth::user()->id,
                "department" => "",
                "room" => "",
            ]),
            "student_2" => collect([
                "id" => "",
                "department" => "",
                "room" => "",
            ]),
            "teacher_1" => "",
            "teacher_2" => "",
            "teacher_3" => "",
            "external" => collect([
                "fname" => "",
                "lname" => "",
                "file" => "",
            ]),
            "file" => collect([
                "path" => "",
                "url" => "",
            ]),
        ]);
    }

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $data = new stdClass();
        $data->department = Master_department::where("status", '=', "active")->get();
        $data->error = $this->checkError($data->project, true);
        if ($data->error) {
            $render = "livewire.students.project.components.error";
        } else {
            $render = "livewire.students.project.create";
        }

        return view($render, compact("data"));
    }

    public function submit(): Redirector|RedirectResponse
    {
        $this->validate();
        if ($this->form->get("teacher_2") === "external") {
            $this->validate(
                [
                    "form.external.fname" => "required",
                    "form.external.lname" => "required",
                ],
                [
                    "form.external.fname.required" => "กรุณากรอกชื่อ",
                    "form.external.lname.required" => "กรุณากรอกนามสกุล",
                    "file_teacher.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (doc,pdf)",
                ]
            );
        }
        if ($this->form->get("student_2")["id"] != "") {
            $this->validate(
                [
                    "form.student_2.room" => "required",
                    "form.student_2.department" => "required",
                ],
                [
                    "form.student_2.room.required" => "กรุณากรอกห้อง",
                    "form.student_2.department.required" => "กรุณาเลือกสาขาวิชา",
                ]
            );
        }
        //begin Transaction
        try {
            //store image
            $upload_locate = "/file/project/";
            $pname = $this->file_project?->getFilename();
            $tname = $this->file_teacher?->getFilename();

            $this->file_project?->storeAs($upload_locate, $pname, "public");
            $this->file_teacher?->storeAs($upload_locate, $tname, "public");
            //start Transaction
            DB::beginTransaction();
            $project = Project::create([
                "name_th" => $this->form->get("name_th"),
                "name_en" => $this->form->get("name_en"),
                "status" => 1,
                "edu_term_id" => $this->term->id,
            ]);
            File::create([
                "title" => "step 1",
                "project_id" => $project->id,
                "is_link" => 0,
                "path" => "/file/project/" . $pname,
            ]);
            User::where("id", $this->form->get("student_1")["id"])->update([
                "room" => $this->form->get("student_1")["room"],
                "department" => $this->form->get("student_1")["department"],
            ]);

            //add users to project
            $project->users()->attach($this->form->get("student_1")["id"], ["role" => "student1"]);
            $project->users()->attach($this->form->get("teacher_1"), ["role" => "teacher1"]);
            $project->users()->attach($this->form->get("teacher_3"), ["role" => "teacher3"]);
            //check null
            if ($this->form->get("student_2")["id"]) {
                $project->users()->attach($this->form->get("student_2")["id"], ["role" => "student2"]);
                User::where("id", $this->form->get("student_2")["id"])->update([
                    "room" => $this->form->get("student_2")["room"],
                    "department" => $this->form->get("student_2")["department"],
                ]);
            }
            //if external
            if ($this->form->get("teacher_2") == "external") {
                $user = User::updateorCreate([
                    "displayname" =>
                        $this->form->get("external")["fname"] . " " . $this->form->get("external")["lname"],
                    "role_id" => 4,
                ]);
                $project->users()->attach($user->id, ["role" => "teacher2"]);
                //store file
                File::create([
                    "title" => "teacher",
                    "project_id" => $project->id,
                    "is_link" => 0,
                    "path" => "/file/project/" . $tname,
                ]);
            } else {
                $project->users()->attach($this->form->get("teacher_2"), ["role" => "teacher2"]);
            }
            DB::commit();
            $this->cleanupOldUploads();
            $this->file_project?->delete();
            $this->file_teacher?->delete();
            $this->emit("alert", ["status" => "success", "title" => "บันทึกสำเร็จ"]);
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => $e->getMessage()]);
        }
        //end Transaction
        return redirect()->route("student.project.home");

    }
}
