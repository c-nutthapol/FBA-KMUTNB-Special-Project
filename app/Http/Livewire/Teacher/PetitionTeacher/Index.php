<?php

namespace App\Http\Livewire\Teacher\PetitionTeacher;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StudentRequest;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';
    public $sortCreateDate = "desc";
    public $search = "";

    public $t_id, $student = "-", $teacher = "-";

    // public function test($id, $student){
    //     dd($student);
    // }

    public function edit($id,$student,$teacher)
    {
        // dd($student);
        $this->student = '-';
        $this->teacher = '-';

        $this->t_id = $id;
        $this->student = $student;
        $this->teacher = $teacher;
    }

    public function render()
    {
        $roleId = auth()->user()->role_id;
        $search = $this->search;

        $studentRequest = StudentRequest::with('master_status')
        ->when($roleId == 2, function($when){
            $when->whereIn("status", [22, 24]);
        })
        ->when($roleId == 2, function($when) {
            // dd($step_teacher);
            $when->whereHas("project.user_project", function($sub){
                $sub->where("user_id", auth()->user()->id)
                ->where("role","teacher1");
            });
        })

        ->when($roleId == 3, function($when){
            $when->whereIn("status", [22]);
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
        return view('livewire.teacher.petition-teacher.index',['studentRequest' => $studentRequest]);
    }
}
