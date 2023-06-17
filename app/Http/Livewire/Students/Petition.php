<?php

namespace App\Http\Livewire\Students;

use App\Models\Master_request;
use App\Models\StudentRequest;
use App\Traits\ProjectTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use stdClass;

class Petition extends Component
{
    use ProjectTrait;

    //varible
    public $form;

    //validation
    protected $rules = [
        "form.title" => "required",
        "form.desc" => "required",
    ];

    protected $messages = [
        "form.title.required" => "กรุณาเลือกคำร้อง",
        "form.desc.required" => "กรุณากรอกรายละเอียด",
    ];

    public function mount()
    {
        $this->form = collect([
            "title" => "",
            "desc" => "",
        ]);
    }

    public function render()
    {
        $data = new stdClass();
        $data->petition = Master_request::query()
            ->where("status", "active")
            ->get();
        return view("livewire.students.petition", compact("data"));
    }

    public function submit()
    {
        $this->validate();

        //begin Transaction
        try {
            //start Transaction
            DB::beginTransaction();
            StudentRequest::create([
                "project_id" => $this->project->id,
                "title" => $this->form["title"],
                "description" => $this->form["desc"],
                "status" => 22,
            ]);

            DB::commit();
            $this->emit("alert", ["status" => "success", "title" => "บันทึกข้อมูลสำเร็จ"]);
            return redirect()->route("student.history");
        } catch (Exception) {
            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => "บันทึกข้อมูลไม่สำเร็จ"]);
        }
        //end Transaction
    }
}
