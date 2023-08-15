<?php

namespace App\Http\Livewire\Students\Project;

use App\Mail\ProjectStudentMail;
use App\Models\File;
use App\Traits\ProjectTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use stdClass;
use Storage;

class Home extends Component
{
    use WithFileUploads, ProjectTrait;

    public $file = [];
    protected $rules = [
        "file.*" => "required|mimes:pdf",
    ];

    protected $messages = [
        "file.required" => "กรุณาเลือกไฟล์เอกสาร",
        "file.*.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (pdf)",
    ];

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $data = new stdClass();
        $data->project = $this->project;

        if (!$this->project?->id) {
            $data->error = new stdClass();
            $data->error->name = "ท่านยังไม่มีโครงงาน";
            $data->error->redirect = route("student.project.create");
            $data->error->btn = "สร้างโครงงาน";
        } else {
            $data->error = $this->checkError();
        }
        if ($data->error->name) {
            return view("livewire.students.project.components.error", compact("data"));
        } else {
            return view("livewire.students.project.index", compact("data"));
        }
    }

    public function deleteProject(): void
    {
        try {
            DB::beginTransaction();
            foreach ($this->project->files as $file) {
                $fileName = 'public' . $file->path;
                if (Storage::exists($fileName)) {
                    Storage::delete($fileName);
                }
                $file->delete();
            }
//            DB::delete("DELETE FROM projects WHERE id = " . "'" . $this->project->id . "'");
            $this->project->delete();
            DB::commit();
            redirect(route("student.project.home"));
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => "บันทึกข้อมูลไม่สำเร็จ", "text" => $e->getMessage()]);
        }

    }

    public function submit(): void
    {
        $this->validate();
        if ($this->file) {

            $s = false;        //begin Transaction
            try {
                //store image
                $upload_locate = "/file/project/";
                //start Transaction
                DB::beginTransaction();
                $this->project->status = $this->nextStatus();
                $this->project->save();
                $times = File::query()->where('title', 'like', $this->project->master_status->name . '%')->where('project_id', '=', $this->project->id)->count() + 1;
                foreach ($this->file as $i => $file) {
                    $fileName = Carbon::now()->format('YmdHis') . $i + 1 . '.' . explode('.', $file->getFilename())[1];
                    $file->storeAs($upload_locate, $fileName, "public");
                    File::create([
                        "title" => $this->project->master_status->name . "ครั้งที่ " . $times . " ไฟล์ที่ " . $i + 1,
                        "project_id" => $this->project->id,
                        "is_link" => 0,
                        "path" => $upload_locate . $fileName,
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
                try {
                    $user = $this->project->user_project->where("role", "teacher1")->first()->user;
                    Mail::to($user->email)->send(new ProjectStudentMail($this->project, $user));
                } catch (Exception) {
                }
                redirect()->route("student.project.home");
            }
        } else {
            $this->emit("alert", ["status" => "error", "title" => "บันทึกข้อมูลไม่สำเร็จ", "text" => "ไม่พบไฟล์"]);
        }
        //end Transaction
    }
}
