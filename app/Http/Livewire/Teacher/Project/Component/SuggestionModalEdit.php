<?php

namespace App\Http\Livewire\Teacher\Project\Component;

use Livewire\Component;
use App\Models\Master_suggestion;
use App\Models\Comment;

class SuggestionModalEdit extends Component
{
    protected $listeners = ['getSuggestionModalEdit'];

    protected $rules = [
		'editSuggestionId' => 'required|array|min:1',
    ];

    public $commentId;
    public $comment;
    public $editSuggestionId = [];
    public $editNote;

    public function getSuggestionModalEdit($id)
    {

        $this->reset('editSuggestionId');
        $this->reset('editNote');
        $this->resetValidation();

        $this->commentId = $id;
        $this->comment = Comment::find($this->commentId);
        $this->editSuggestionId = explode(",", $this->comment->title);
        $this->editNote = $this->comment->detail;
    }

    public function submit()
    {
        try {
            $this->validate();
            $comment = Comment::find($this->commentId);
            $comment->title = join(",",$this->editSuggestionId);
            $comment->detail = $this->editNote;
            $comment->save();

            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('closeModalEdit');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }

    }

    public function render()
    {
        $suggestion = Master_suggestion::where("status","active")->get();
        return view('livewire.teacher.project.component.suggestion-modal-edit',['suggestion' => $suggestion, 'comment' => $this->comment]);
    }
}
