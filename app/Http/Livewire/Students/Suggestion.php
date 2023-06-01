<?php

namespace App\Http\Livewire\Students;

use App\Models\Comment;
use App\Models\Master_request;
use App\Models\Project;
use App\Models\StudentRequest;
use App\Traits\ProjectTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use stdClass;

class Suggestion extends Component
{
    use ProjectTrait;
    //varible
    public $form;
    public $project;

    //validation
    protected $rules = [
        "form.title" => "required",
        "form.desc" => "required",
    ];

    protected $messages = [
        "form.title.required" => "กรุณาเลือกคำร้อง",
        "form.desc.required" => "กรุณากรอกรายละเอียด",
    ];

    public function mount()
    {
        $this->form = collect([
            "title" => "",
            "desc" => "",
        ]);
    }

    public function render()
    {
        return view("livewire.students.suggestion");
    }
    public function getcommentProperty()
    {
        return Comment::where(
            "project_id",
            Project::whereHas("users", function ($query) {
                $query->where("user_id", Auth::user()->id);
            })->first()->id
        )
            ->with("user")
            ->get();
    }
}
