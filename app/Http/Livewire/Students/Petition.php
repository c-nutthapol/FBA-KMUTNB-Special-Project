<?php

namespace App\Http\Livewire\Students;

use App\Mail\RequestStudentMail;
use App\Models\Master_request;
use App\Models\StudentRequest;
use App\Traits\ProjectTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Mail;
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

    public function mount(): void
    {
        $this->form = collect([
            "title" => "",
            "desc" => "",
        ]);
    }

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $data = new stdClass();
        $data->petition = Master_request::query()
            ->where("status", "active")
            ->get();
        return view("livewire.students.petition", compact("data"));
    }

    public function submit()
    {
        $s = false;
        $this->validate();
        $id = '';
        //begin Transaction
        try {
            //start Transaction
            DB::beginTransaction();
            $id = StudentRequest::create([
                "project_id" => $this->project->id,
                "title" => $this->form["title"],
                "description" => $this->form["desc"],
                "status" => 22,
            ]);
            DB::commit();
            $this->emit("alert", ["status" => "success", "title" => "บันทึกข้อมูลสำเร็จ"]);
            $s = true;
            redirect()->route("student.history");
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => "บันทึกข้อมูลไม่สำเร็จ", "text" => $e->getMessage()]);
        }

        //end Transaction

        if ($s) {
            $request = StudentRequest::where('id', '=', $id->id)->first();
            $user = $this->project->user_project->where("role", "teacher1")->first()->user;
            Mail::to($user->email)->send(new RequestStudentMail($request, $user, $this->project));
        }
    }
}
