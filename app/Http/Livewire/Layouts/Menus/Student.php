<?php

namespace App\Http\Livewire\Layouts\Menus;

use App\Models\Project;
use App\Models\UserProject;
use Livewire\Component;

class Student extends Component
{
    protected $listeners = ['refreshCounter' => '$refresh'];
    public function render()
    {

        $data = UserProject::with('project')
        ->where('user_id', auth()->user()->id)
        ->first();


        if($data){
            $count = count($data->project->comments->where('isread',0));
        }else{
            $count = 0 ;
        }




        return view('livewire.layouts.menus.student')->with(compact('count'));
    }
}
