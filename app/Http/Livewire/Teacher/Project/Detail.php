<?php

namespace App\Http\Livewire\Teacher\Project;

use Livewire\Component;

class Detail extends Component
{

    public function mount($id)
    {
        // dd($id);
    }

    public function render()
    {
        return view('livewire.teacher.project.detail');
    }
}
