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

    public function render()
    {
        $master_news = Master_new::where('status', 'active')->get();
        return view('livewire.admin.settings.news.edit', compact('master_news'));
    }

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

    public function submit()
    {
        if ($this->status == null || !$this->status) {
            $this->status = "inactive";
        }
        // $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        $Data = [
            'cover_img' => $this->photo->store('News', 'public'),
            'status' => $this->status,
            'title' => $this->title,
            'masternew_id' => $this->masternew_id,
            'detail' => $this->detail,
        ];
        try {
            $update = News::find($this->idTable);
            $update->update($Data);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            return redirect()->route('admin.settings.news.home');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
