<?php

namespace App\Http\Livewire\Teacher\Project;

use App\Models\Project;
use App\Models\EduTerm;
use App\Models\Master_status;
use Livewire\Component;
use Livewire\WithPagination;
use Mail;
use App\Mail\ProjectMail;

class Progressresult extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';
    public $search;
    public $year;

    public function render()
    {
        // dd($this->step(1,"string"));
        // search
        $search = $this->search;
        $year = $this->year;
        $step = 2;
        $step_teacher = [8,12];
        $step_admin = [10, 11, 12];

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

        $projects = Project::with("user_project","edu_term","master_status")
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
        ->paginate(10);
        // dd($projects);
        return view('livewire.teacher.project.progressresult', compact('projects','termFilter','statusFilter'));
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
}

