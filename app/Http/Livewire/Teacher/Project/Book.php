<?php

namespace App\Http\Livewire\Teacher\Project;

use App\Models\Project;
use App\Models\EduTerm;
use App\Models\Master_status;
use Livewire\Component;
use Livewire\WithPagination;
use Mail;
use App\Mail\ProjectMail;
use App\Exports\ProjectExport;
use App\Traits\ProjectTrait;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Book extends Component
{
    use WithPagination;
    use ProjectTrait;

    protected $paginationTheme = 'default';
    public $search;
    public $search_name;
    public $search_id;
    public $status;
    public $year;
    public $checkDate = false;
    public $dataProjects = [];

    public function render()
    {
        // dd($this->step(1,"string"));
        // search
        $search = $this->search;
        $search_name = $this->search_name;
        $search_id = $this->search_id;
        $year = $this->year;
        $status = $this->status;
        $step = 4;
        $step_teacher = [19, 20, 21];
        $step_admin = [19, 20, 21];

        // role
        $roleId = auth()->user()->role_id;

        // filter
        $termFilter = EduTerm::all();
        $statusFilter = Master_status::where("step", $step)
        ->whereIn('id', [19,20,21])
        ->get();

        // Select Option
        // $statusOption = Master_status::where("step", $step)
        // ->where("role_id",auth()->user()->role_id)
        // ->get();

        $res = Project::with("user_project","edu_term","master_status")
        ->whereHas("master_status", function($sub) use($step){
            $sub->where("step", $step);
        })
        ->when($roleId == 2, function($when) use($step_teacher){
            // dd($step_teacher);
            $when->whereHas("user_project", function($sub){
                $sub->where("user_id", auth()->user()->id)
                ->where("role","teacher1");
            })
            ->whereIn("status", $step_teacher);
        })
        ->when($roleId == 3, function($when) use($step_admin){
            $when->whereIn("status", $step_admin);
        })
        ->when($search, function($when) use($search){
            $when->where("name_th","LIKE","%".$search."%")
            ->orWhere("name_en","LIKE","%".$search."%");
        })
        ->when($year, function($when) use($year){
            $when->where("edu_term_id",$year);
        })
        ->when($status, function($when) use($status){
            $when->where("status",$status);
        })
        ->when($search_name, function($when) use($search_name){
            $when->whereHas('user_project.user', function ($q) use ($search_name) {
                $q->where("displayname","LIKE","%".$search_name."%");
            });
        })
        ->when($search_id, function($when) use($search_id){
            $when->whereHas('user_project.user', function ($q) use ($search_id) {
                $q->where("username","LIKE","%".$search_id."%");
            });
        });
        $this->dataProjects = $res->get();
        $projects = $res->paginate(10);

        if($this->term->project_step->book_approval_end){
            $otherDate = $this->term->project_step->book_approval_end;
        }else{
            $otherDate = Carbon::now()->addMinutes(10);
        }

        $nowDate = Carbon::now();
        $this->checkDate = $nowDate->gt($otherDate);

        // dd($this->checkDate);

        return view('livewire.teacher.project.book', compact('projects','termFilter','statusFilter'));
    }

    public function updateStatusProject($id, $status)
    {
        try {
            $project = Project::with('master_status','user_project')->find($id);
            if($project->master_status->status_update == "Y"){
                $project->status = $status;
                $project->save();
                $project->refresh();

                foreach($project->user_project as $item){
                    if($item->user->role_id == 1 && $item->user->email){
                        Mail::to($item->user->email)->send(new ProjectMail($project, $item->user));
                    }
                }

                $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
                $this->emit('refreshComponent');
            }else{
                $this->emit('alert', ['status' => 'error', 'title' => 'ไม่สามารถอัพเดทสถานะได้']);
            }

        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }

    public function export()
    {
        return Excel::download(new ProjectExport($this->dataProjects), "project-step-7.xlsx");
    }
}
