<?php

namespace App\Http\Livewire\Admin\Settings\Component\Banners;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class ModalEdit extends Component
{

    use WithFileUploads;

    protected $listeners = ['getBannersEdit'];

    public $idTable;

    public $img, $status, $photo;

    protected function rules()
    {
        return [
            'photo' => ['nullable', 'image', 'max:8192'],
            'status' => ['boolean'],
        ];
    }

    protected $attributes = [
        'photo' => 'ชื่อรูป',
        'status' => 'สถานะ',
    ];


    public function getBannersEdit($id)
    {
        $this->resetValidation();
        $this->idTable = $id;
        $record = Banner::find($id);
        if ($record) {
            $this->img = $record->img;
            $this->status = $record->status;
        }
    }

    public function submit()
    {
        $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        try {
            if ($this->photo) {
                $validatedData['img'] =  $this->photo->store('Banners', 'public');
                unset($validatedData['photo']);
            } else {
                unset($validatedData['photo']);
            }
            $update = Banner::find($this->idTable);
            $update->update($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshBanners');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.admin.settings.component.banners.modal-edit');
    }
}
