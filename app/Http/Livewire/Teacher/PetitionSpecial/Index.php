<?php

namespace App\Http\Livewire\Teacher\PetitionSpecial;

use App\Models\Register_Request;
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

    public function delete($id)
    {
        try {
            $record = Register_Request::find($id);
            if ($record) {
                $record->delete();
                $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $roleId = auth()->user()->role_id;
        $search = $this->search;

        $studentRequest = Register_Request::with('master_status')
        ->when($roleId == 3, function($when){
            $when->whereIn("status", [23, 25]);
        })
        ->orderByRaw("created_at ".$this->sortCreateDate)
        ->paginate(10);
        // ->get();
        // dd($studentRequest);
        return view('livewire.teacher.petition-special.index',['studentRequest' => $studentRequest]);
    }
}
