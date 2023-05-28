<?php

namespace App\Http\Livewire\Admin\Settings\Master;

use App\Models\Document as ModelsDocument;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Document extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'default';

    public $name,$t_id,$t_name,$t_status,$file, $format="file",$pin="inactive",$date;

    public $t_pin,$t_date,$t_file;
    public $search ='';



    public function submit(){

        $this->validate([
            'name' => 'required|max:255',
            'date' => 'required',
            'file' => 'required',
        ], [
            'name.required' => 'กรุณากรอกชื่อ',
            'date.required' => 'กรุณากรอกวันที่',
            'file.required' => 'กรุณาเลือกไฟล์',
        ]);
        try{

            if($this->format == 'file'){
                if($this->file){
                    $port_img = $this->file;
                    $port_gen = $port_img->getClientOriginalName();
                    $img_name = now()->format('Y_m_d') . '_' . $port_gen;
                    $upload_locate = '/file/documents/';
                    $full_path_file = $upload_locate . $img_name;
                    $port_img->storeAs($upload_locate, $img_name, 'public');
                }
            }else if($this->format == 'link'){
                $full_path_file = $this->file;
            }

            ModelsDocument::create([
                'name'=> $this->name,
                'file'=> $full_path_file,
                'pin'=> $this->pin,
                'date'=> $this->date,
                'size'=> ($this->format == 'file') ? $port_img->getSize() : '',
                'format'=> ($this->format == 'file') ? $port_img->getMimeType() : '',
                'view'=> 0,
            ]);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            return redirect(request()->header('Referer'));

        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function edit($id,$name,$status,$pin,$date,$file)
    {
        $this->t_id = $id;
        $this->t_name = $name;
        $this->t_date = $date;
        $this->t_pin = $pin;
        $this->t_status = $status;
        // $this->t_file = $file;
    }

    public function update()
    {

        $this->validate([
            't_name' => 'required|max:255',
            't_date' => 'required',
        ], [
            't_name.required' => 'กรุณากรอกชื่อ',
            't_date.required' => 'กรุณากรอกวันที่',
        ]);
        try{

            if($this->format == 'file'){
                if($this->t_file){
                    $port_img = $this->t_file;
                    $port_gen = $port_img->getClientOriginalName();
                    $img_name = now()->format('Y_m_d') . '_' . $port_gen;
                    $upload_locate = '/file/documents/';
                    $full_path_file = $upload_locate . $img_name;
                    $port_img->storeAs($upload_locate, $img_name, 'public');
                }
            }else if($this->format == 'link'){
                $full_path_file = $this->t_file;
            }

            $model = ModelsDocument::where('id',$this->t_id)->first();
            $model->update([
                'name'=> $this->t_name,
                'pin'=> $this->t_pin,
                'date'=> $this->t_date,
                'status'=> $this->t_status,
            ]);

            if($this->t_file){
                $model->update([
                    'file'=> $full_path_file,
                    'size'=> ($this->format == 'file') ? $port_img->getSize() : '',
                    'format'=> ($this->format == 'file') ? $port_img->getMimeType() : '',
                ]);
            }



            $this->reset([
                't_name',
                't_status',
                't_id',
            ]);

            $this->emit('alert', ['status' => 'success', 'title' => 'แก้ไขสำเร็จ']);
            return redirect(request()->header('Referer'));

        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }





    }


    public function delete($id)
    {
        try{
            $model = ModelsDocument::where('id',$id)->first();
            $model->delete();
            $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลสำเร็จ']);
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $data = ModelsDocument::query()
        ->where('name', 'like', '%' . $this->search . '%')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        return view('livewire.admin.settings.master.document')->with(compact('data'));
    }
}
