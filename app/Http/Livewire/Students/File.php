<?php

namespace App\Http\Livewire\Students;

use App\Models\File as Files;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class File extends Component
{
    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view("livewire.students.file");
    }

    public function getRequestProperty(): Collection
    {
        if (Auth::user()->projects->first()) {
            $result = Files::where("project_id", "=", Auth::user()->projects->first()->id)->orderBy("id", "desc")->get();
        }
        return $result ?? new Collection();
    }
}
