<?php

namespace App\Http\Livewire\Teacher\Project\Component;

use Livewire\Component;
use App\Models\Master_suggestion;
use App\Models\Comment;

class SuggestionModalCreate extends Component
{
    protected $listeners = ['getSuggestionModalCreate'];

    public $suggestionId = array();
    public $note;
    public $projectId;

    protected $rules = [
		'suggestionId' => 'required|array|min:1',
		// 'product_options.*.some_field_inside_the_array' =>  'your_rules_for_that',
    ];

    public function getSuggestionModalCreate()
    {
        $this->reset('suggestionId');
        $this->reset('note');
        $this->resetValidation();
    }

    public function mount($id)
    {
        $this->projectId = $id;
    }

    public function submit()
    {
        // dd($this->suggestionId);
        // $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        try {
            $this->validate();
            $insert = Comment::insert([
                'title' => join(",",$this->suggestionId),
                'detail' => $this->note,
                'project_id' => $this->projectId,
                'created_by' => auth()->user()->id,
            ]);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('closeModalCreate');
            $this->emit('refreshSuggestion');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function render()
    {
        $suggestion = Master_suggestion::where("status","active")->get();
        return view('livewire.teacher.project.component.suggestion-modal-create',['suggestion' => $suggestion]);
    }
}
