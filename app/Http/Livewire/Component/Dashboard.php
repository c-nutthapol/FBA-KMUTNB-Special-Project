<?php

namespace App\Http\Livewire\Component;

use App\Models\EduTerm;
use App\Models\Master_department;
use App\Models\Master_status;
use App\Models\Project;
use Livewire\Component;

class Dashboard extends Component


{
    public $year, $term, $department, $chartData, $watting, $approved, $approved_pass;

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

        $chart_data = Project::get();
        $departments = Master_department::get();
        $edu_terms = EduTerm::with('term')->get();
        $edu_years = $edu_terms->groupBy(function ($item) {
            return $item->term->year;
        });

        return view('livewire.component.dashboard', compact('chart_data', 'departments',  'edu_years'));
    }
}
