<?php

namespace App\Http\Livewire\Admin\Settings\Master;

use App\Models\Banner;
use App\Models\Cover as ModelsCover;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Cover extends Component
{
    use WithPagination;

    protected $paginationTheme = "default";

    protected $listeners = ['refreshCover' => '$refresh'];

    public $order_by = 'DESC';

    public function render()
    {
        $banners = ModelsCover::orderBy('created_at', $this->order_by)->paginate(10);
        return view("livewire.admin.settings.master.cover", compact("banners"));
    }

    public function ChangeStatus($id)
    {
        $record =  ModelsCover::find($id);
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
            $record = ModelsCover::find($id);
            if ($record) {
                $record->delete();
                $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

}
