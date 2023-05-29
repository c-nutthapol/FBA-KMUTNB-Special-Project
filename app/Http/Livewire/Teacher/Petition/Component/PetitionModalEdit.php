<?php

namespace App\Http\Livewire\Teacher\Petition\Component;

use Livewire\Component;
use App\Models\StudentRequest;
use App\Models\Master_status;

class PetitionModalEdit extends Component
{
    protected $listeners = ['getPetitionModalEdit'];

    public $status;
    public $note;
    public $petitionId;

    public function getPetitionModalEdit($id)
    {

        $this->petitionId = $id;
        $studentRequest = StudentRequest::find($this->petitionId);
        $this->status = $studentRequest->status;
        if(auth()->user()->role()->first()->name == "teacher"){
            $this->note = $studentRequest->teacher_remark;
        }else if(auth()->user()->role()->first()->name == "admin"){
            $this->note = $studentRequest->admin_remark;
        }
        // if($studentRequest->status == 39){
        //     $this->status = "true";
        //     $this->note = $studentRequest->teacher_remark;
        // }else if($studentRequest->status == 40){
        //     $this->status = "false";
        //     $this->note = $studentRequest->teacher_remark;
        // }else if($studentRequest->status == 42){
        //     $this->status = "true";
        //     $this->note = $studentRequest->teacher_remark;
        // }else if($studentRequest->status == 43){
        //     $this->status = "false";
        //     $this->note = $studentRequest->teacher_remark;
        // }
    }

    public function submit()
    {
        // dd(auth()->user()->role()->first()->name);
        try {
            $StudentRequest = StudentRequest::with('master_status')->find($this->petitionId);

            if($StudentRequest->master_status->status_update == "Y"){
                $StudentRequest->status = $this->status;
                if(auth()->user()->role()->first()->name == "teacher"){
                    $StudentRequest->teacher_remark = $this->note;
                }else if(auth()->user()->role()->first()->name == "admin"){
                    $StudentRequest->admin_remark = $this->note;
                }
                $StudentRequest->save();
                $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
                $this->emit('refreshComponent');
            }else{
                $this->emit('alert', ['status' => 'error', 'title' => 'ไม่สามารถอัพเดทสถานะได้']);
            }

        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $masterStatus = Master_status::where("role_id",auth()->user()->role_id)->where("step",6)->whereNotIn("id",[38, 41])->get();
        return view('livewire.teacher.petition.component.petition-modal-edit',['masterStatus' => $masterStatus]);
    }
}
