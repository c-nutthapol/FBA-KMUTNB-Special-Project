<?php

namespace App\Http\Livewire\Students\Project;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $project;
    public $form;
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
    public function mount()
    {
        $this->project = Project::whereHas("users", function ($query) {
            $query->where("user_id", Auth::user()->id);
        })
            ->with("user_project")
            ->first();
        if (!$this->project) {
            return redirect()->route("student.project.create");
        } elseif ($this->project->editable == 0) {
            return redirect()->route("student.project.home");
        }
        $this->form = collect([
            "name_th" => $this->project->name_th,
            "name_en" => $this->project->name_en,
            "student_1" => "",
            "student_2" => $this->project->user_project->where("role", "student")[1]->user_id,
            "teacher_1" => $this->project->user_project->where("role", "teacher1")->first()->user_id,
            "teacher_2" => $this->project->user_project->where("role", "teacher2")->first()->user_id,
            "teacher_3" => $this->project->user_project->where("role", "teacher3")->first()->user_id,
        ]);
    }

    public function render()
    {
        $data = collect();
        $data->put("project", $this->project);
        $data->put("student", User::where("role_id", 1)->get());
        $data->put("teacher", User::where("role_id", 2)->get());
        return view("students.project.edit", compact("data"));
    }
    public function submit()
    {
        $this->validate();
        $this->form->put("student_1", auth()->user()->id);
        try {
            $this->project->update([
                "name_th" => $this->form->get("name_th"),
                "name_en" => $this->form->get("name_en"),
                "editable" => 0,
            ]);
            $this->project->user_project()->delete();
            $this->project->users()->attach($this->form->get("student_1"), ["role" => "student"]);
            $this->project->users()->attach($this->form->get("student_2"), ["role" => "student"]);
            $this->project->users()->attach($this->form->get("teacher_1"), ["role" => "teacher1"]);
            $this->project->users()->attach($this->form->get("teacher_2"), ["role" => "teacher2"]);
            $this->project->users()->attach($this->form->get("teacher_3"), ["role" => "teacher3"]);
        } catch (\Exception $e) {
            dd($e);
        }

        return redirect()->route("student.project.home");
    }
}
