<?php

namespace App\Http\Livewire\Teacher\Project;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\PaginationTrait;

class Index extends Component
{
    use WithPagination, PaginationTrait;

    protected $paginationTheme = 'default';

    public function render()
    {
        $projects = Project::paginate(10);

        return view('livewire.teacher.project.index', compact('projects'));
    }
}
