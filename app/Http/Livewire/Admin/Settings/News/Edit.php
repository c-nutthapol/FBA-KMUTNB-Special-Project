<?php

namespace App\Http\Livewire\Admin\Settings\News;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\News;
use Symfony\Contracts\Service\Attribute\Required;

class Edit extends Component
{
    use WithFileUploads;

    protected $listeners = ['getNewsEdit'];

    public $idTable;

    public function render()
    {
        return view('livewire.admin.settings.news.edit');
    }

    public function mount($new_id)
    {
        $this->resetValidation();
        $this->idTable = $new_id;
        $record = News::find($new_id)->first();
        if ($record) {
            $this->cover_img = $record->cover_img;
            $this->title = $record->title;
        }
    }

    public $cover_img, $photo, $record , $title;
}
