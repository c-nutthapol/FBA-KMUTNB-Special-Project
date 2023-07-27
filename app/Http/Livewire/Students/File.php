<?php

namespace App\Http\Livewire\Students;

use App\Models\File as Files;
use Auth;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class File extends Component
{
    use WithFileUploads;

    public $file, $fId;

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

    public function updatedFile(): void
    {
        try {
            DB::beginTransaction();
            $upload_locate = "/file/project/";
            $file = Files::find($this->fId);
            $this->file->storeAs($upload_locate, $file->path, "public");
            $file->created_at = Carbon::now();
            $file->save();
            DB::commit();
            $this->reset();
        } catch (Exception $e) {
            DB::rollBack();
            $this->emit("alert", ["status" => "error", "title" => $e->getMessage()]);
        }
    }
}
