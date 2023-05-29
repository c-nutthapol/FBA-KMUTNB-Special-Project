<?php

namespace App\Http\Livewire\Admin\Settings\Component\Banners;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithFileUploads;

class ModalCreate extends Component
{
    use WithFileUploads;

    protected $listeners = ['getBannersCreate'];

    public function render()
    {
        return view('livewire.admin.settings.component.banners.modal-create');
    }

    public function getBannersCreate()
    {
        $this->reset('img', 'status', 'created_by', 'updated_by', 'deleted_by');
        $this->resetValidation();
    }

    public $photo, $status = 1, $created_by, $updated_by, $deleted_by;

    protected function rules()
    {
        return [
            'photo' => ['required', 'image', 'max:8192'],
            'status' => ['required', 'boolean'],
        ];
    }

    protected $attributes = [
        'photo' => 'ชื่อรูป',
        'status' => 'สถานะ',
    ];

    public function submit()
    {
        $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        try {
            if ($this->photo) {
                $validatedData['img'] =  $this->photo->store('Banners', 'public');
                unset($validatedData['photo']);
            }
            Banner::create($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshBanners');
            $this->emit('close_modal', 'createModal');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
