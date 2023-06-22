<?php

namespace App\Http\Livewire\Teacher\Petition;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StudentRequest;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';
    public $sortCreateDate = "desc";
    public $search = "";

    public function render()
    {
        $roleId = auth()->user()->role_id;
        $search = $this->search;

        $studentRequest = StudentRequest::with('master_status')
        ->when($roleId == 2, function($when){
            $when->whereIn("status", [22, 24]);
        })
        ->when($roleId == 3, function($when){
            $when->whereIn("status", [23, 25, 26,27]);
        })
        ->when($search != "", function($when) use($search){
            $when->whereHas('project', function ($sub) use($search){
                $sub->where('name_th','LIKE',"%$search%")
                ->orWhere('name_en','LIKE',"%$search%");
            })->orWhereHas('master_requests', function ($sub) use($search){
                $sub->where('name','LIKE',"%$search%");
            });
        })
        ->orderByRaw("created_at ".$this->sortCreateDate)
        ->paginate(10);
        // ->get();
        // dd($studentRequest);
        return view('livewire.teacher.petition.index',['studentRequest' => $studentRequest]);
    }
}
