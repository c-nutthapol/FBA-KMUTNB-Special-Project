<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\Banner;

class Banners extends Component
{
    public function render()
    {
        $banners = Banner::where('status', 1)->orderBy('created_at', 'DESC')->get();
        return view('livewire.component.banners', compact('banners'));
    }
}
