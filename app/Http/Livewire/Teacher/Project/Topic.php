<?php

namespace App\Http\Livewire\Teacher\Project;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Topic extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    public function render()
    {
        $projects = Project::paginate(10);

        return view('livewire.teacher.project.topic', compact('projects'));
    }
}
