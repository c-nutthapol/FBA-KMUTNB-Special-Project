<?php

namespace App\Http\Livewire\Component;

use App\Models\EduTerm;
use App\Models\Master_department;
use App\Models\Master_status;
use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component


{
    public $year, $term, $department, $chartData, $watting, $approved, $approved_pass, $value;

    public function mount()
    {
        $this->chartData = $this->fetchChartData();
        $this->watting = Master_status::where('status', 'like', '%รออนุมัติ%')->pluck('id')->toArray();
        $this->approved = Master_status::where('status', 'like', 'อนุมัติขอ%')->pluck('id')->toArray();
        $this->approved_pass = Master_status::where('status', 'like', 'อนุมัติผล%')->pluck('id')->toArray();
    }

    private function fetchChartData()
    {
        return Project::pluck('id')->toArray();
    }

    public function render()
    {
        $chart_data = Project::when($this->year, function ($query) {
            $query->where('edu_term_id', $this->year);
        })
            ->when($this->department, function ($query) {
                $query->whereHas('departments', function ($subQuery) {
                    $subQuery->where('department', $this->department);
                });
            })
            ->get();


        $departments = Master_department::get();
        $edu_years = EduTerm::select('id', 'year', 'term')->get()->groupBy(function ($item) {
            return $item->year;
        });

        return view('livewire.component.dashboard', compact('chart_data', 'departments',  'edu_years'));
    }
}
