<?php

namespace App\Http\Livewire\Teacher\PetitionSpecial\Component;


use Livewire\Component;
use App\Models\StudentRequest;
use App\Models\Master_status;
use Mail;
use App\Mail\RequestMail;
use App\Models\Register_Request;
use App\Models\User;

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
        if(auth()->user()->role_id == 3){
            $this->note = $studentRequest->admin_remark;
        }
    }

    public function submit()
    {
        // dd(auth()->user()->role()->first()->name);
        try {
            $StudentRequest = Register_Request::with('master_status')->find($this->petitionId);
            // dd($StudentRequest->master_status);
            if($StudentRequest->master_status->status_update == "Y"){
                $StudentRequest->status = $this->status;
                $StudentRequest->save();
                $StudentRequest->refresh();


                // Mail::to($StudentRequest->user->email)->send(new RequestMail($StudentRequest, $item->user));

                // foreach($StudentRequest->user->user_project as $item){
                //     if($item->user->role_id == 1 && $item->user->email){

                //     }
                // }

                // // ส่งเมลไปหาแอดมิน
                // $admin = User::where('role_id',3)
                // ->whereStatus('active')
                // ->get();

                // // dd($admin);

                // foreach($admin as $item){
                //     Mail::to($item->email)->send(new RequestMail($StudentRequest, $item));
                // }

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
        return view('livewire.teacher.petition-special.component.petition-modal-edit',['masterStatus' => $masterStatus]);
    }
}
