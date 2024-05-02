<?php

namespace App\Http\Livewire\Teacher\PetitionAll;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StudentRequest;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';
    public $sortCreateDate = "desc";
    public $search = "";

    public $t_id, $student = "-", $teacher = "-", $checked=[];

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

    public function deleteall($id){
        try {
            $record = StudentRequest::whereKey($this->checked);
            if ($record) {
                $record->delete();
                $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
                $this->checked = [];
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function clearselected(){
        $this->checked = [];
    }

    public function isChecked($id){

        // dd($id);
        return in_array($id,$this->checked) ? 'bg-gray-100' : '';
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
            $when->whereIn("status", [26, 27]);
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
        return view('livewire.teacher.petition-all.index',['studentRequest' => $studentRequest]);
    }
}
