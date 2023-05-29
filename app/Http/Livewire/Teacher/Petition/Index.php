<?php

namespace App\Http\Livewire\Teacher\Petition;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StudentRequest;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    public function render()
    {
        $roleName = auth()->user()->role()->first()->name;

        $studentRequest = StudentRequest::with('master_status')
        ->when($roleName == "teacher", function($when){
            $when->whereIn("status", [38, 40]);
        })
        ->when($roleName == "admin", function($when){
            $when->whereIn("status", [39, 41, 43]);
        })
        ->paginate(10);

        // dd($studentRequest);
        return view('livewire.teacher.petition.index',['studentRequest' => $studentRequest]);
    }
}
