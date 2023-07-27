<?php

namespace App\Http\Livewire\Teacher\Project\Component;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Models\Project;

class DropdownList extends Component
{
    protected $listeners = ['getDropdownList'];
    public $project = null;

    public function getDropdownList($id)
    {
        $this->project = Project::with("user_project")->find($id);
    }

    public function render()
    {
        return view('livewire.teacher.project.component.dropdown-list', ['project' => $this->project]);
    }
}
