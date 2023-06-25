<?php

namespace App\Http\Livewire\Students\Project;

use App\Mail\ProjectStudentMail;
use App\Models\File;
use App\Traits\ProjectTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use stdClass;

class Home extends Component
{
    use WithFileUploads, ProjectTrait;

    public $file = [];
    protected $rules = [
        "file.*" => "required|mimes:doc,dot,pdf,docx",
    ];

    protected $messages = [
        "file.required" => "กรุณาเลือกไฟล์เอกสาร",
        "file.*.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (doc,dot,pdf,docx)",
    ];

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $data = new stdClass();
        $data->project = $this->project;
        $data->error = $this->checkError();
        if ($data->error->name) {
            return view("livewire.students.project.components.error", compact("data"));
        } else {
            return view("livewire.students.project.index", compact("data"));
        }
    }

    public function deleteProject(): void
    {
        DB::delete("DELETE FROM projects WHERE id = " . "'" . $this->project->id . "'");
        redirect(route("student.project.home"));
    }

    public function submit(): void
    {
        $this->validate();
        $s = false;        //begin Transaction
        try {
            //store image
            $upload_locate = "/file/project/";

            //start Transaction
            DB::beginTransaction();
            $this->project->status = $this->nextStatus();
            $this->project->save();
            foreach ($this->file as $file) {
                $pname = $file->getFilename();
                $file->storeAs($upload_locate, $pname, "public");
                File::create([
                    "title" => "step " . $this->step,
                    "project_id" => $this->project->id,
                    "is_link" => 0,
                    "path" => $upload_locate . $pname,
                ]);
            }


            DB::commit();
            $s = true;
            $this->cleanupOldUploads();
            foreach ($this->file as $file) {
                $file->delete();
            }


            $this->emit("alert", ["status" => "success", "title" => "อัพโหลดไฟล์แล้ว"]);
            $this->emit("close_modal", "uploadModal");
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => "บันทึกข้อมูลไม่สำเร็จ", "text" => $e->getMessage()]);
        }

        if ($s) {
            $user = $this->project->user_project->where("role", "teacher1")->first()->user;
            Mail::to($user->email)->send(new ProjectStudentMail($this->project, $user));
            redirect()->route("student.project.home");
        }
        //end Transaction
    }
}
