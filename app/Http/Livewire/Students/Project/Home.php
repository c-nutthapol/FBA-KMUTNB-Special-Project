<?php

namespace App\Http\Livewire\Students\Project;

use App\Models\File;
use App\Models\Project;
use App\Traits\ProjectTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
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

    public function render()
    {
        $data = new stdClass();
        $data->error = $this->checkError();
        if ($data->error) {
            return view("livewire.students.project.components.error", compact("data"));
        } else {
            return view("livewire.students.project.index");

        }

    }

    public function deleteProject()
    {
        DB::delete("DELETE FROM projects WHERE id = " . "'" . $this->getProject()->id . "'");
    }

    public function submit()
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
            Project::where("id", $this->project->id)->update([
                "status" => $this->nextStatus(),
            ]);

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
