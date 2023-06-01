<?php

namespace App\Http\Livewire\Students;

use App\Models\Master_request;
use App\Models\Project;
use App\Models\StudentRequest;
use App\Traits\ProjectTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use stdClass;

class History extends Component
{
    use ProjectTrait;

    public function render()
    {
        return view("livewire.students.history");
    }
    public function getRequestProperty()
    {
        return StudentRequest::where(
            "project_id",
            Project::whereHas("users", function ($query) {
                $query->where("user_id", Auth::user()->id);
            })->first()->id
        )->get();
    }
}
