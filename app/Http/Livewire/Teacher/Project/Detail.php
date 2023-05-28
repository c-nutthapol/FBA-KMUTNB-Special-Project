<?php

namespace App\Http\Livewire\Teacher\Project;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Models\Project;

class Detail extends Component
{
    protected $detail;

    public function mount($id)
    {
        $this->detail = Project::with("user_project")
        ->find($id);
    }

    public function render()
    {
        return view('livewire.teacher.project.detail',['detail' => $this->detail]);
    }
}
