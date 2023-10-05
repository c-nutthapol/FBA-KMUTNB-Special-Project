<?php

namespace App\Http\Livewire\Layouts\Partials;

use App\Models\MasterLocations;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {

        $data = MasterLocations::query()
        ->OrderBy('id','desc')
        ->first();

        // dd($data->name);

        return view('livewire.layouts.partials.footer')->with(compact('data'));
    }
}
