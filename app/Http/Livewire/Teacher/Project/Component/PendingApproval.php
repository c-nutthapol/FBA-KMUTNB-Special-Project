<?php

namespace App\Http\Livewire\Teacher\Project\Component;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Traits\CheckTermTrait;
use App\Models\Project;

class PendingApproval extends Component
{
    use CheckTermTrait;

    public function render()
    {
        $stepPage = Route::current()->uri;
        $stepTeacher = [];
        $stepAdmin = [];
        $stepText = "";

        if(str_contains($stepPage, "topic")){
            $stepText = $this->step(2,"string");
            $stepTeacher = [6, 9];
            $stepAdmin = [7, 11, 12];
        }else if(str_contains($stepPage, "progress")){
            $stepText = $this->step(3,"string");
            $stepTeacher = [15, 18];
            $stepAdmin = [16, 20, 21];
        }else if(str_contains($stepPage, "defense_exam")){
            $stepText = $this->step(4,"string");
            $stepTeacher = [24, 27];
            $stepAdmin = [25, 29, 30];
        }else if(str_contains($stepPage, "book")){
            $stepText = $this->step(5,"string");
            // $step_teacher = [33, 36];
            $stepTeacher = [33];
            $stepAdmin = [34, 35];
        }else{
            $stepText = $this->step(1,"string");
            $stepTeacher = [1];
            $stepAdmin = [2];
        }

        $countProject = Project::with('user_project')
        ->when(auth()->user()->role_id == 2, function($when) use($stepTeacher){
            $when->whereHas("user_project", function($sub){
                $sub->where("user_id", auth()->user()->id)
                ->where("role","teacher1");
            })
            ->whereIn("status", $stepTeacher);
        })
        ->when(auth()->user()->role_id == 3, function($when) use($stepAdmin){
            $when->whereIn("status", $stepAdmin);
        })
        ->count();
        return view('livewire.teacher.project.component.pending-approval', compact('stepText','countProject'));
    }
}
