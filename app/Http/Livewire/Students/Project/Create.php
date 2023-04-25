<?php

namespace App\Http\Livewire\Students\Project;

use App\Models\Config;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $form;
    public function mount()
    {
        $project = Project::whereHas("users", function ($query) {
            $query->where("user_id", Auth::user()->id);
        })->first();
        if ($project) {
            return redirect()->route("student.project.home");
        }
        $this->form = collect([
            "name_th" => "",
            "name_en" => "",
            "student_1" => "",
            "student_2" => "",
            "teacher_1" => "",
            "teacher_2" => "",
            "teacher_3" => "",
        ]);
    }
    public function render()
    {
        $data = collect();

        $data->put("user", User::all());
        $data->put(
            "faculty",
            collect([
                "1" => "การบัญชี",
                "2" => "บริหารธุรกิจอุตสาหกรรมและโลจิสติกส์",
                "3" => "คอมพิวเตอร์ธุรกิจ",
            ])
        );
        $data->put(
            "room",
            collect([
                "1" => "ห้อง 1",
                "2" => "ห้อง 2",
                "3" => "ห้อง 3",
            ])
        );
        $data->put("student", User::where("role_id", 1)->get());
        $data->put("teacher", User::where("role_id", 2)->get());
        return view("students.project.create", compact("data"));
    }
    protected $rules = [
        "form.name_th" => "required",
        "form.name_en" => "required",
        "form.student_2" => "required",
        "form.teacher_1" => "required",
        "form.teacher_2" => "required",
        "form.teacher_3" => "required",
    ];
    protected $messages = [
        "form.name_th.required" => "กรุณากรอกชื่อโครงงานภาษาไทย",
        "form.name_en.required" => "กรุณากรอกชื่อโครงงานภาษาอังกฤษ",
        "form.student_2.required" => "กรุณาเลือกนักศึกษาคนที่ 2",
        "form.teacher_1.required" => "กรุณาเลือกอาจารย์ที่ปรึกษาหลัก",
        "form.teacher_2.required" => "กรุณาเลือกอาจารย์ที่ปรึกษาร่วม",
        "form.teacher_3.required" => "กรุณาเลือกประธานสอบ",
    ];

    public function submit()
    {
        $this->validate();
        $this->form->put("student_1", auth()->user()->id);

        try {
            $project = Project::create([
                "name_th" => $this->form->get("name_th"),
                "name_en" => $this->form->get("name_en"),
                "edu_term_id" => Config::where("key", "edu_term_id")->first()->value,
                "status" => "waiting",
            ]);
            $project->users()->attach($this->form->get("student_1"), ["role" => "student"]);
            $project->users()->attach($this->form->get("student_2"), ["role" => "student"]);
            $project->users()->attach($this->form->get("teacher_1"), ["role" => "teacher1"]);
            $project->users()->attach($this->form->get("teacher_2"), ["role" => "teacher2"]);
            $project->users()->attach($this->form->get("teacher_3"), ["role" => "teacher3"]);
            return redirect()->route("student.project.home");
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
