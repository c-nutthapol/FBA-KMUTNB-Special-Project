<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\Banner;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Banners extends Component
{
    use WithPagination;

    protected $paginationTheme = "default";

    protected $listeners = ['refreshBanners' => '$refresh'];

    public $order_by = 'DESC';

    public function render()
    {
        $banners = Banner::orderBy('created_at', $this->order_by)->paginate(10);
        return view("livewire.admin.settings.banners", compact("banners"));
    }

    public function ChangeStatus($id)
    {
        $record =  Banner::find($id);
        if ($record->status) {
            $record->status = 0;
            $record->save();
        } else {
            $record->status = 1;
            $record->save();
        }
    }

    public function delete($id)
    {
        try {
            $record = Banner::find($id);
            if ($record) {
                $record->delete();
                $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
