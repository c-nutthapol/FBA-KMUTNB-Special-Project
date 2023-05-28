<?php

namespace App\Http\Livewire\Admin\Settings\Master;

use App\Models\Master_request;
use Livewire\Component;
use Livewire\WithPagination;

class Request extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    public $name,$t_id,$t_name,$t_status;
    public $search ='';

    public function submit(){

        $this->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => 'กรุณากรอกชื่อ',
        ]);
        try{
            Master_request::create([
                'name'=> $this->name,
            ]);

            // $this->reset();
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            return redirect(request()->header('Referer'));

            // $this->dispatchBrowserEvent('closeModal');
            // $this->emit('closeModal');

        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function edit($id,$name,$status)
    {
        $this->t_id = $id;
        $this->t_name = $name;
        $this->t_status = $status;
        // $this->dispatchBrowserEvent('openModal');
    }

    public function update()
    {
        try{
            $model = Master_request::where('id',$this->t_id)->first();
            $model->update([
                'name'=> $this->t_name,
                'status'=> $this->t_status,
            ]);

            $this->reset([
                't_name',
                't_status',
                't_id',
            ]);

            $this->emit('alert', ['status' => 'success', 'title' => 'แก้ไขสำเร็จ']);
            return redirect(request()->header('Referer'));
            // $this->dispatchBrowserEvent('closeModal');
            // $this->emit('alert',['type' => 'success', 'message' => 'แก้ไขสำเร็จ']);

        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }


    public function delete($id)
    {
        try{
            $model = Master_request::where('id',$id)->first();
            $model->delete();
            $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลสำเร็จ']);
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        // $data = Master_request::Paginate(10);

        $data = Master_request::query()
        ->where('name', 'like', '%' . $this->search . '%')
        ->paginate(10);
        // ->where(function ($sub_query) {
        //     $sub_query->where('title', 'like', '%' . $this->search . '%');
        // })
        return view('livewire.admin.settings.master.request')->with(compact('data'));
    }
}
