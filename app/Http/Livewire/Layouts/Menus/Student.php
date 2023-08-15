<?php

namespace App\Http\Livewire\Layouts\Menus;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Student extends Component
{
    protected $listeners = ['refreshCounter' => '$refresh'];

    public function render()
    {

        $data = Project::whereHas("users", function ($query) {
            $query->where("user_id", Auth::user()->id);
        })
            ->first();

        if ($data) {
            $count = count($data->comments->where('isread', 0));
        } else {
            $count = 0;
        }


        return view('livewire.layouts.menus.student')->with(compact('count'));
    }
}
