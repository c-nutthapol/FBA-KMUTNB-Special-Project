<?php

namespace App\Http\Livewire\Admin\Settings\News;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\News;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Master_new;

class Edit extends Component
{
    use WithFileUploads;

    protected $listeners = ['refreshNews' => '$refresh'];

    public $idTable;

    public $cover_img, $photo, $record, $title, $masternew_id, $detail, $status;

    public function mount($new_id)
    {
        $this->resetValidation();
        $this->idTable = $new_id;
        $record = News::find($new_id);
        if ($record) {
            $this->cover_img = $record->cover_img;
            $this->title = $record->title;
            $this->masternew_id = $record->masternew_id;
            $this->detail = $record->detail;
            $this->status = $record->status == 'active' ? 'active' : null;
        }
    }

    protected function rules()
    {
        return [
            'photo' => ['nullable', 'image', 'max:8192'],
            'status' => ['required', 'in:active,inactive'],
            'title' => ['required', 'string'],
            'detail' => ['required', 'string'],
            'masternew_id' => ['required',],
        ];
    }

    protected $attributes = [
        'photo' => 'รูปภาพ',
        'status' => 'สถานะ',
        'title' => 'หัวข่าว',
        'content' => 'รายละเอียด',
        'masternew_id' => 'ประเภทของข่าว',
    ];

    public function render()
    {
        $master_news = Master_new::where('status', 'active')->get();
        return view('livewire.admin.settings.news.edit', compact('master_news'));
    }


    public function changeStatus(){
        if($this->status == 'active'){
            $this->status = 'inactive';
        }else{
            $this->status = 'active';
        }
    }


    public function submit()
    {
        $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        try {
            if ($this->photo) {
                $validatedData['cover_img'] =  $this->photo->store('News', 'public');
                unset($validatedData['photo']);
            }else{
                unset($validatedData['photo']);
            }
            $update = News::find($this->idTable);
            $update->update($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            return redirect()->route('admin.settings.news.home');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}


