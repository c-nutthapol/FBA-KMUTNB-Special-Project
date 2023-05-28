<?php

namespace App\Http\Livewire\Admin\Settings\News;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Master_new;
use App\Models\News;

class Create extends Component
{

    use WithFileUploads;

    public $photo, $content, $title, $detail, $status, $masternew_id, $img;

    protected function rules()
    {
        return [
            'img' => ['image|max:1024'],
        ];
    }

    public function render()
    {
        $master_news = Master_new::where('status', 'active')->get();
        return view('livewire.admin.settings.news.create', compact('master_news'));
    }

    public function submit()
    {
        if ($this->status == null || !$this->status) {
            $this->status = "inactive";
        }
        $Data = [
            'cover_img' => $this->photo->store('News', 'public'),
            'title' => $this->title,
            'masternew_id' => $this->masternew_id,
            'status' => $this->status,
            'detail' => $this->content,
        ];
        try {
            News::create($Data);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshBanners');
            return redirect()->route('admin.settings.news.home');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
