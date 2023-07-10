<?php

namespace App\Http\Livewire\Auth;

use App\Models\Cover as ModelsCover;
use Livewire\Component;

class Cover extends Component
{
    public function render()
    {
        $cover = ModelsCover::latest()->first();


        return view('livewire.auth.cover', compact("cover"));
    }
}
