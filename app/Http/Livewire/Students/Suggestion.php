<?php

namespace App\Http\Livewire\Students;

use App\Models\Comment;
use App\Models\Master_suggestion;
use App\Traits\ProjectTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Suggestion extends Component
{
    use ProjectTrait;

    //varible
    public int $idProject;
    public $new_array = array();
    public $message;

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view("livewire.students.suggestion");
    }

    public function openView($id)
    {
        $this->new_array= array();

        $data = Comment::query()
        ->where('id',$id)
        ->first();

        $data->titles = array_map('intval', explode(',', $data->title));
        $this->message = $data->detail;

        foreach($data->titles as $item){
            $text = Master_suggestion::query()
            ->where('id',$item)
            ->value('name');
            array_push( $this->new_array, $text);
        }



        try {
            Comment::query()
            ->where('id',$id)
            ->update([
                "isread" => 1,
            ]);
            $this->emit('refreshCounter');

        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }

    }

    public function getCommentsProperty(): Collection
    {

        if ($this->project) {
            $result = Comment::where("project_id", $this->project->id)->get();
        }

        return $result ?? new Collection();
    }
}
