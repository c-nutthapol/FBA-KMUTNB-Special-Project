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
        $roleId = auth()->user()->role_id;

        $studentRequest = StudentRequest::with('master_status')
        ->when($roleId == 2, function($when){
            $when->whereIn("status", [38, 40]);
        })
        ->when($roleId == 3, function($when){
            $when->whereIn("status", [39, 41, 43]);
        })
        ->paginate(10);

        // dd($studentRequest);
        return view('livewire.teacher.petition.index',['studentRequest' => $studentRequest]);
    }
}
