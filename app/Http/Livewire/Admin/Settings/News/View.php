<?php

namespace App\Http\Livewire\Admin\Settings\News;

use Livewire\Component;
use App\Models\News;

class View extends Component
{
    public $idTable;

    public $cover_img, $photo, $record, $title, $masternew_id, $detail, $status, $created_at;

    public function mount($new_id)
    {
        $this->resetValidation();
        $this->idTable = $new_id;
        News::find($new_id)->increment('view');
        $record = News::find($new_id);
        if ($record) {
            $this->cover_img = $record->cover_img;
            $this->title = $record->title;
            $this->masternew_id = $record->master_new->name;
            $this->detail = $record->detail;
            $this->status = $record->status == 'active' ? 'active' : null;
            $this->created_at = $record->created_at;
        }
    }


    public function render()
    {
        return view('livewire.admin.settings.news.view');
    }
}
