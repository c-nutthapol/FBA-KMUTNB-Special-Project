<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\News as NewsModel;

class News extends Component
{
    public function render()
    {
        $News = NewsModel::where('status', 'active')->get();
        return view('livewire.component.news', compact('News'));
    }
}
