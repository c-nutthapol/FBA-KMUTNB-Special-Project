<?php

namespace App\Http\Livewire\Students;

use App\Models\Register_Request;
use App\Models\StudentRequest;
use App\Traits\ProjectTrait;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class History extends Component
{
    use ProjectTrait;

    public $detail;
    public $config_day = [
        1 => 7,
        2 => 7,
        3 => 7,
    ];

    protected $listeners = ['refreshHistory' => '$refresh'];

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view("livewire.students.history");
    }

    public function setDetail($id): void
    {
        $this->detail =
            Register_Request::where("id", "=", $id)->first()
            ??
            StudentRequest::where("id", "=", $id)->first();
    }

    public function getRequestProperty(): Collection
    {
        return StudentRequest::where("project_id", $this->project->id)->get() ?? new Collection();
    }

    public function getRegisterRequestProperty(): Collection
    {
        return Register_Request::where("created_by", "=", Auth::user()->id)->get() ?? new Collection();
    }
}
