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
        $stepNumber;
        $stepText = "";

        if(str_contains($stepPage, "topic")){
            $stepText = $this->step(2,"string");
            $stepNumber = 6;
        }else if(str_contains($stepPage, "progress")){
            $stepText = $this->step(3,"string");
            $stepNumber = 15;
        }else if(str_contains($stepPage, "defense_exam")){
            $stepText = $this->step(4,"string");
            $stepNumber = 24;
        }else if(str_contains($stepPage, "book")){
            $stepText = $this->step(5,"string");
            $stepNumber = 33;
        }else{
            $stepText = $this->step(1,"string");
            $stepNumber = 1;
        }

        $countProject = Project::where("status",$stepNumber)->count();
        return view('livewire.teacher.project.component.pending-approval', compact('stepText','countProject'));
    }
}
