<?php

namespace App\Http\Livewire\Teacher\Project;

use Livewire\Component;
use App\Models\Project;
use App\Models\Master_suggestion;
use App\Models\Comment;
use Livewire\WithPagination;

class Suggestion extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    protected $listeners = ['refreshSuggestion' => '$refresh'];

    public $projectId;

    public function mount($id)
    {
        $this->projectId = $id;
    }

    public function delete($id)
    {
        try {
            $comment = Comment::find($id);
            $comment->delete();
            $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $project = Project::with("user_project")->find($this->projectId);
        $comments = Comment::where("project_id",$this->projectId)->orderBy('id', 'DESC')->paginate(10);

        return view('livewire.teacher.project.suggestion', compact('project', 'comments'));
    }
}
