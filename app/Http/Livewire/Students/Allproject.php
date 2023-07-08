<?php

namespace App\Http\Livewire\Students;

use App\Models\Project;
use App\Models\EduTerm;
use App\Models\Master_status;
use Livewire\Component;
use Livewire\WithPagination;
use Mail;
use App\Mail\ProjectMail;
use App\Exports\ProjectExport;
use Maatwebsite\Excel\Facades\Excel;

class Allproject extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';
    public $search;
    public $year;
    public $dataProjects = [];

    public function render()
    {
        // dd($this->step(1,"string"));
        // search
        $search = $this->search;
        $year = $this->year;
        $step = 4;
        $step_teacher = [2, 5, 6];
        $step_admin = [4,5,6];

        // role
        $roleId = auth()->user()->role_id;

        // filter
        $termFilter = EduTerm::all();
        $statusFilter = Master_status::where("step", $step)
        ->where("status_filter","Y")
        ->where("role_id",$roleId)
        ->get();

        // Select Option
        // $statusOption = Master_status::where("step", $step)
        // ->where("role_id",auth()->user()->role_id)
        // ->get();

        $res = Project::with("user_project","edu_term","master_status")
        ->whereHas("master_status", function($sub) use($step){
            $sub->where("step", $step);
        })
        ->where("status", 20)
        ->when($search, function($when) use($search){
            $when->where("name_th","LIKE","%".$search."%")
            ->orWhere("name_en","LIKE","%".$search."%");
        })
        ->when($year, function($when) use($year){
            $when->where("edu_term_id",$year);
        })
        ->orderBy('id', 'DESC');
        $this->dataProjects = $res->get();
        $projects = $res->paginate(10);

        // dd($projects[0]->files->sortByDesc('id'));


        return view('livewire.students.allproject', compact('projects','termFilter','statusFilter'));
    }



    public function export()
    {
        return Excel::download(new ProjectExport($this->dataProjects), "project-step-2.xlsx");
    }
}
