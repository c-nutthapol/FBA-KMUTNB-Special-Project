<?php

namespace App\Http\Livewire\Admin\Settings\Master;

use App\Models\Master_status;
use Livewire\Component;
use Livewire\WithPagination;

class Status extends Component
{
    Use WithPagination;

    protected $paginationTheme = 'default';

    public function render()
    {
        $data = Master_status::query()
        ->paginate(10);
        return view('livewire.admin.settings.master.status')->with(compact('data'));
    }
}
