<?php

namespace App\Http\Livewire\Students\Project;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    protected $project;
    public function mount()
    {
        $this->project = Project::whereHas("users", function ($query) {
            $query->where("user_id", Auth::user()->id);
        })
            ->with("user_project", "comments")
            ->first();
        // if (!$this->project) {
        //     return redirect()->route("student.project.create");
        // }
    }
    public function render()
    {
        $data = collect();

        $data->put("project", $this->project);
        // dd($data);
        return view("students.project.index", compact("data"));
    }
}
