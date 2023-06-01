<?php

namespace App\Http\Livewire\Students\Project;

use App\Models\File;
use App\Models\Project;
use App\Traits\ProjectTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use stdClass;

class Home extends Component
{
    use WithFileUploads, ProjectTrait;
    public $file;
    public Project $project;
    public $step;
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
        $data->project = $this->project = $this->getProject();
        $data->term = $this->getTerm();
        $data->step = $this->checkStep($data->project);
        $data->error = $this->checkError($data->term, $data->project);
        if ($data->error) {
            return view("livewire.students.project.components.error", compact("data"));
        } else {
            return view("livewire.students.project.index", compact("data"));
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
            $pname = $this->file->getFilename();

            //start Transaction
            DB::beginTransaction();
            Project::where("id", $this->project->id)->update([
                "status" => $this->nextStatus($this->project->master_status->id),
            ]);

            File::create([
                "title" => "step " . $this->checkStep($this->project),
                "project_id" => $this->project->id,
                "is_link" => 0,
                "path" => "files/" . $pname,
            ]);

            DB::commit();
            $this->cleanupOldUploads();
            $this->file->delete();
            $this->emit("alert", ["status" => "success", "title" => "อัพโหลดไฟล์แล้ว"]);
            $this->emit("close_modal", "uploadModal");
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            if (Storage::get("files/" . $pname)) {
                Storage::delete("files/" . $pname);
            }
            $this->emit("alert", ["status" => "error", "title" => "บันทึกข้อมูลไม่สำเร็จ"]);
        }
        //end Transaction
    }
}
