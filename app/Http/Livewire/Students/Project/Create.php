<?php

namespace App\Http\Livewire\Students\Project;

use App\Mail\ProjectStudentMail;
use App\Models\File;
use App\Models\Master_department;
use App\Models\Project;
use App\Models\User;
use App\Traits\ProjectTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use stdClass;

class Create extends Component
{
    use WithFileUploads, ProjectTrait;

    //varible
    public $form;
    //file
    public $file_teacher = [];
    public $file_teacher1 = [];
    public $file_project = [];

    public $checkButton = true;

    //validation
    protected array $rules = [
        "form.name_th" => "required",
        "form.name_en" => "required",
        "form.student_1.room" => "required",
        "form.student_1.department" => "required",
        "form.teacher_1" => "required",
        "form.teacher_3" => "required",
        "file_project.*" => "required|mimes:pdf",

    ];

    protected array $messages = [
        "form.name_th.required" => "กรุณากรอกชื่อโครงงานภาษาไทย",
        "form.name_en.required" => "กรุณากรอกชื่อโครงงานภาษาอังกฤษ",
        "form.student_1.room" => "กรุณากรอกห้อง",
        "form.student_1.department" => "กรุณาเลือกสาขาวิชา",
        "form.teacher_1.required" => "กรุณาเลือกอาจารย์ที่ปรึกษาหลัก",
        "form.teacher_3.required" => "กรุณาเลือกประธานสอบ",
        "file_project.required" => "กรุณาเลือกไฟล์เอกสาร",
        "file_project.*.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (pdf)",
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
            "external1" => collect([
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

        // dd($this->project);

        $data->project = $this->project;
        $data->error = $this->checkError(true);

        // dd($this->checkError());

        // dd($data->error->name);

        if ($data->error->name) {

            if($data->error->name != "ท่านยังไม่มีโครงงาน กรุณาเริ่มดำเนินการ"){
                $render = "livewire.students.project.components.error";
            }else{
                $render = "livewire.students.project.create";
            }
        } else {
            $render = "livewire.students.project.create";
        }
        return view($render, compact("data"));
    }

    public function submit(): void
    {
        $this->checkButton = false;
        $s = false;
        // add teacher2 validate
        if ($this->form->get("teacher_2") === "external") {
            $this->validate(
                [
                    "form.external.fname" => "required",
                    "form.external.lname" => "required",
                    "file_teacher.*" => "required|mimes:pdf",

                ],
                [
                    "form.external.fname.required" => "กรุณากรอกชื่อ",
                    "form.external.lname.required" => "กรุณากรอกนามสกุล",
                    "file_teacher.*.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (pdf)",

                ]
            );
        }
        // add teacher3 validate
        if ($this->form->get("teacher_3") === "external") {
            $this->validate(
                [
                    "form.external1.fname" => "required",
                    "form.external1.lname" => "required",
                    "file_teacher1.*" => "required|mimes:pdf",

                ],
                [
                    "form.external1.fname.required" => "กรุณากรอกชื่อ",
                    "form.external1.lname.required" => "กรุณากรอกนามสกุล",
                    "file_teacher1.*.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (pdf)",

                ]
            );
        }
        // add student2 validation
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
        // begin Transaction
        try {
            if (!$this->file_project) {
                throw new Exception("ไม่พบไฟล์ กรุณาแนบไฟล์ใหม่");
            }
            DB::beginTransaction();
            // image location
            $upload_locate = "/file/project/";
            $project = Project::create([
                "name_th" => $this->form->get("name_th"),
                "name_en" => $this->form->get("name_en"),
                "status" => 1,
                "edu_term_id" => $this->term->id,
            ]);
            //project file
            $times = File::query()->where('title', 'like', 'สอบหัวข้อ' . '%')->where('project_id', '=', $project->id)->count() + 1;
            foreach ($this->file_project as $i => $file) {
                $fileName = "FBA" . Carbon::now()->format('YmdHis') . $i + 1 . '.' . explode('.', $file->getFilename())[1];
                $file->storeAs($upload_locate, $fileName, "public");
                File::create([
                    "title" => $fileName,
                    "project_id" => $project->id,
                    "is_link" => 0,
                    "path" => "/file/project/" . $fileName,
                ]);
            }


            User::where("id", $this->form->get("student_1")["id"])->update([
                "room" => $this->form->get("student_1")["room"],
                "department" => $this->form->get("student_1")["department"],
            ]);

            //add users to project
            $project->users()->attach($this->form->get("student_1")["id"], ["role" => "student1"]);
            $project->users()->attach($this->form->get("teacher_1"), ["role" => "teacher1"]);
            //check null
            if ($this->form->get("student_2")["id"]) {
                $project->users()->attach($this->form->get("student_2")["id"], ["role" => "student2"]);
                User::where("id", $this->form->get("student_2")["id"])->update([
                    "room" => $this->form->get("student_2")["room"],
                    "department" => $this->form->get("student_2")["department"],
                ]);
            }
            //if external teacher2
            if ($this->form->get("teacher_2") == "external") {
                $user = User::updateorCreate([
                    "displayname" =>
                        $this->form->get("external")["fname"] . " " . $this->form->get("external")["lname"],
                    "role_id" => 4,
                ]);
                $project->users()->attach($user->id, ["role" => "teacher2"]);
                //teaher file
                if (!$this->file_teacher) {
                    throw new Exception("ไม่พบไฟล์ กรุณาแนบไฟล์ใหม่");
                }
                foreach ($this->file_teacher as $file) {
                    $file->storeAs($upload_locate, $file->getFilename(), "public");

                    File::create([
                        "title" => "หนังสือแต่งตั้งที่ปรึกษาร่วม",
                        "project_id" => $project->id,
                        "is_link" => 0,
                        "path" => "/file/project/" . $file->getFilename(),
                    ]);
                }

            } else if ($this->form->get("teacher_2")) {
                $project->users()->attach($this->form->get("teacher_2"), ["role" => "teacher2"]);
            }
            //if external teacher3
            if ($this->form->get("teacher_3") == "external") {
                $user = User::updateorCreate([
                    "displayname" =>
                        $this->form->get("external1")["fname"] . " " . $this->form->get("external1")["lname"],
                    "role_id" => 4,
                ]);
                if (!$this->file_teacher1) {
                    throw new Exception("ไม่พบไฟล์ กรุณาแนบไฟล์ใหม่");
                }
                $project->users()->attach($user->id, ["role" => "teacher3"]);
                foreach ($this->file_teacher1 as $file) {
                    $file->storeAs($upload_locate, $file->getFilename(), "public");
                    File::create([
                        "title" => "หนังสือแต่งตั้งประธานสอบ",
                        "project_id" => $project->id,
                        "is_link" => 0,
                        "path" => "/file/project/" . $file->getFilename(),
                    ]);
                }
            } else if ($this->form->get("teacher_3")) {
                $project->users()->attach($this->form->get("teacher_3"), ["role" => "teacher3"]);

            }
            DB::commit();
            $this->cleanupOldUploads();
            foreach ($this->file_project as $file) {
                $file->delete();
            }
            foreach ($this->file_teacher as $file) {
                $file->delete();
            }
            foreach ($this->file_teacher1 as $file) {
                $file->delete();
            }
            $this->emit("alert", ["status" => "success", "title" => "บันทึกสำเร็จ"]);

            $s = true;
            redirect()->route("student.project.home");

        } catch (Exception $e) {

            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => $e->getMessage()]);
            $this->checkButton = true;
        }
        //end Transaction
        if ($s) {
            $user = $this->project->user_project->where("role", "teacher1")->first()->user;
            try {
                Mail::to($user->email)->send(new ProjectStudentMail($this->project, $user));
            } catch (Exception) {
            }
        }
    }
}
