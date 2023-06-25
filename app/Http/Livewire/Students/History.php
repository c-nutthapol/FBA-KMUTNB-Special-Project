<?php

namespace App\Http\Livewire\Students;

use App\Models\StudentRequest;
use App\Traits\ProjectTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class History extends Component
{
    use ProjectTrait;

    public $config_day = [
        1 => 7,
        2 => 7,
        3 => 7,
    ];


    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view("livewire.students.history");
    }

    public function getRequestProperty(): Collection
    {

        if ($this->project) {
            $result = StudentRequest::where("project_id", $this->project->id)->get();
        }

        return $result ?? new Collection();
    }
}
