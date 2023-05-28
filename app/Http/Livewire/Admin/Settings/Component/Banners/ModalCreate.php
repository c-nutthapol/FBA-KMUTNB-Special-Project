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

    public $photo, $status, $created_by, $updated_by, $deleted_by;

    protected function rules()
    {
        return [
            'img' => ['image|max:1024'],
        ];
    }

    protected $attributes = [
        'img' => 'ชื่อรูป',
        'status' => 'สถานะ',
        'created_by' => 'คนที่สร้าง',
        'updated_by' => 'คนที่อัพเดท',
        'deleted_by' => 'คนที่ลบ',
    ];

    public function submit()
    {

        $Data = [
            'img' => $this->photo->store('Banners', 'public'),
            'status' => 1,
        ];
        try {
            Banner::create($Data);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshBanners');
            $this->emit('close_modal',['element' => 'createModal']);
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
