<?php

namespace App\Http\Livewire\Teacher\Project;

use Livewire\Component;
use App\Models\Project;
use App\Models\Master_suggestion;

class Suggestion extends Component
{
    protected $listeners = ['refreshSuggestion' => '$refresh'];

    public $projectId;

    public function mount($id)
    {
        $this->projectId = $id;
    }

    public function render()
    {
        $project = Project::with("user_project","comments")->find($this->projectId);
        return view('livewire.teacher.project.suggestion',["project" => $project]);
    }
}
