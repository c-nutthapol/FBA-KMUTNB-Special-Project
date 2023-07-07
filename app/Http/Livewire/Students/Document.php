<?php

namespace App\Http\Livewire\Students;

use App\Models\Document as ModelsDocument;
use Livewire\Component;

class Document extends Component
{
    public function render()
    {
        $data = ModelsDocument::query()
        ->where('status', 'active')
        ->orderBy("pin")
        ->orderBy("id", "asc")
        ->paginate(10);
        return view('livewire.students.document')->with(compact('data'));
    }


}
