<?php

namespace App\Http\Livewire\Students\Project;

use App\Models\File;
use App\Traits\ProjectTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Redirector;
use Livewire\WithFileUploads;
use stdClass;

class Home extends Component
{
    use WithFileUploads, ProjectTrait;

    public $file;
    protected $rules = [
        "file" => "required|mimes:doc,dot,pdf",
    ];

    protected $messages = [
        "file.required" => "กรุณาเลือกไฟล์เอกสาร",
        "file.mimes" => "กรุณาเลือกประเภทไฟล์ที่กำหนดเท่านั้น (doc,dot,pdf)",
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

    public function deleteProject(): RedirectResponse|Redirector
    {
        DB::delete("DELETE FROM projects WHERE id = " . "'" . $this->project->id . "'");
        return redirect(route("student.project.home"));
    }

    public function submit(): void
    {
        $this->validate();
        //begin Transaction
        try {
            //store image
            $this->file->storeAs("files");
            $upload_locate = "/file/project/";
            $pname = $this->file->getFilename();
            $this->file?->storeAs($upload_locate, $pname, "public");

            //start Transaction
            DB::beginTransaction();
            $this->project->status = $this->nextStatus();
            $this->project->save();

            File::create([
                "title" => "step " . $this->step,
                "project_id" => $this->project->id,
                "is_link" => 0,
                "path" => $upload_locate . $pname,
            ]);

            DB::commit();
            $this->cleanupOldUploads();
            $this->file->delete();
            $this->emit("alert", ["status" => "success", "title" => "อัพโหลดไฟล์แล้ว"]);
            $this->emit("close_modal", "uploadModal");
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => "บันทึกข้อมูลไม่สำเร็จ", "message" => $e]);
        }
        //end Transaction
    }
}
