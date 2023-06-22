<?php

namespace App\Http\Livewire\Admin\Settings\News;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Master_new;
use App\Models\News;

class Create extends Component
{

    use WithFileUploads;

    public $photo, $content, $title, $detail, $status = 'active', $masternew_id, $img;

    protected function rules()
    {
        return [
            'photo' => ['required', 'image', 'max:8192'],
            'status' => ['required', 'string'],
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'masternew_id' => ['required', 'string'],
        ];
    }

    protected $attributes = [
        'photo' => 'ชื่อรูป',
        'status' => 'สถานะ',
        'title' => 'หัวข่าว',
        'content' => 'รายละเอียด',
        'masternew_id' => 'ประเภทของข่าว',
    ];

    public function render()
    {
        $master_news = Master_new::where('status', 'active')->get();
        return view('livewire.admin.settings.news.create', compact('master_news'));
    }

    public function submit()
    {
        $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        try {
            if ($this->status == null || !$this->status) {
                $this->status = "inactive";
            }
            if ($this->photo) {
                $validatedData['cover_img'] =  $this->photo->store('News', 'public');
                unset($validatedData['photo']);
            }
            if ($this->content) {
                $validatedData['detail'] =  $this->content;
                unset($validatedData['content']);
            }
            News::create($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshBanners');
            return redirect()->route('admin.settings.news.home');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
