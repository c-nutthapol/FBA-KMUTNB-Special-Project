<?php

namespace App\Http\Livewire\Admin\Settings\News;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\News as NewsModel;

class News extends Component
{
    use WithPagination;

    public function delete($id)
    {
        try {
            $record = NewsModel::find($id);
            if ($record) {
                $record->delete();
                $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
            }
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $news = NewsModel::paginate(10);
        return view('livewire.admin.settings.news.news', compact('news'));
    }
}
