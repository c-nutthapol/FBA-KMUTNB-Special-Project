<?php

namespace App\Http\Livewire\Teacher\Project;

use App\Models\Project;
use App\Models\EduTerm;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';
    public $search;
    public $year;

    public function render()
    {
        // search
        $search = $this->search;
        $year = $this->year;

        // role
        $roleName = auth()->user()->role()->first()->name;

        // group step
        $statusProject = [1, 2, 3, 4, 5];

        // filter
        $term = EduTerm::all();

        $projects = Project::with("user_project","edu_term","master_status")
        ->WhereIn("status", $statusProject)
        ->when($roleName == "teacher", function($when){
            $when->whereHas("user_project", function($sub){
                $sub->where("user_id", auth()->user()->id)
                ->where("role","teacher1");
            })
            ->where("status","1");
        })
        ->when($roleName == "admin", function($when){
            $when->where("status","2");
        })
        ->when($search, function($when) use($search){
            $when->where("name_th","LIKE","%".$search."%")
            ->orWhere("name_en","LIKE","%".$search."%");
        })
        ->when($year, function($when) use($year){
            $when->where("edu_term_id",$year);
        })
        ->paginate(10);
        // dd($projects);
        return view('livewire.teacher.project.index', compact('projects','term'));
    }

    public function updateStatusProject($id, $status)
    {
        try {
            $project = Project::find($id);
            $project->status = $status;
            $project->save();
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
