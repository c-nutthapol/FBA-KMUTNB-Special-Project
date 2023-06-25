<?php

namespace App\Http\Livewire\Students;

use App\Models\Comment;
use App\Traits\ProjectTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Suggestion extends Component
{
    use ProjectTrait;

    //varible
    public int $idProject;

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view("livewire.students.suggestion");
    }

    public function getCommentsProperty(): Collection
    {

        if ($this->project) {
            $result = Comment::where("project_id", $this->project->id)->get();
        }

        return $result ?? new Collection();
    }
}
