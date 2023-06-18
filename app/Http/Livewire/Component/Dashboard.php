<?php

namespace App\Http\Livewire\Component;

use App\Models\EduTerm;
use App\Models\Master_department;
use App\Models\Master_status;
use App\Models\Project;
use Livewire\Component;
use App\Exports\ProjectExport;
use Maatwebsite\Excel\Facades\Excel;

class Dashboard extends Component
{
    public $year,
        $term,
        $department,
        $watting,
        $approved,
        $approved_pass,
        $success,
        $value,
        $chart_data,
        $dataProjects = [];

    public function resetFilters()
    {
        $this->year = [];
        $this->department = [];
    }

    public function mount()
    {
        $this->watting = Master_status::where("step", '1')
            ->pluck("id")
            ->toArray();
        $this->approved = Master_status::where("step", '2')
            ->pluck("id")
            ->toArray();
        $this->approved_pass = Master_status::where("step", '3')
            ->pluck("id")
            ->toArray();
        $this->success = Master_status::where("step", '4')
            ->pluck("id")
            ->toArray();
    }

    public function render()
    {
        //data
        $Data = Project::when($this->year, function ($query) {
            $query->where("edu_term_id", $this->year);
        })
            ->when($this->department, function ($query) {
                $query->whereHas("departments", function ($subQuery) {
                    $subQuery->where("department", $this->department);
                });
            })
            ->get();

        $this->dataProjects = $Data;

        //chart Data
        $chart_all = $Data->count();
        $chart_watting = $Data->whereIn("status", $this->watting)->count();
        $chart_approved = $Data->whereIn("status", $this->approved)->count();
        $chart_approved_pass = $Data->whereIn("status", $this->approved_pass)->count();
        $chart_success = $Data->whereIn("status", $this->success)->count();

        $chartData = [
            "chart_all" => $chart_all,
            "chart_watting" => $chart_watting,
            "chart_approved" => $chart_approved,
            "chart_approved_pass" => $chart_approved_pass,
            "chart_success" => $chart_success,
        ];

        $this->emit("chartDataUpdated", $chartData);

        $departments = Master_department::get();
        $edu_years = EduTerm::select("id", "year", "term")
            ->get()
            ->groupBy(function ($item) {
                return $item->year;
            });

        return view("livewire.component.dashboard", compact("Data", "departments", "edu_years"));
    }

    public function export()
    {
        return Excel::download(new ProjectExport($this->dataProjects), "dashboard.csv");
    }
}
