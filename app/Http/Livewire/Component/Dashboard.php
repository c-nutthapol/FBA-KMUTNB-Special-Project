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
    public $year, $term, $department, $watting, $approved, $approved_pass, $value, $chart_data;

    public function resetFilters()
    {
        $this->year = [];
        $this->department = [];
    }

    public function mount()
    {
        $this->watting = Master_status::where('status', 'like', '%รออนุมัติ%')->pluck('id')->toArray();
        $this->approved = Master_status::where('status', 'like', 'อนุมัติขอ%')->pluck('id')->toArray();
        $this->approved_pass = Master_status::where('status', 'like', 'อนุมัติผล%')->pluck('id')->toArray();
    }

    public function render()
    {
        //data
        $Data = Project::when($this->year, function ($query) {
            $query->where('edu_term_id', $this->year);
        })->when($this->department, function ($query) {
            $query->whereHas('departments', function ($subQuery) {
                $subQuery->where('department', $this->department);
            });
        })->get();

        //chart Data
        $chart_all = $Data->count();
        $chart_watting = $Data->whereIn('status', $this->watting)->count();
        $chart_approved = $Data->whereIn('status', $this->approved)->count();
        $chart_approved_pass = $Data->whereIn('status', $this->approved_pass)->count();

        $chartData = [
            'chart_all' => $chart_all,
            'chart_watting' => $chart_watting,
            'chart_approved' => $chart_approved,
            'chart_approved_pass' => $chart_approved_pass,
        ];

        $this->emit('chartDataUpdated', $chartData);

        $departments = Master_department::get();
        $edu_years = EduTerm::select('id', 'year', 'term')->get()->groupBy(function ($item) {
            return $item->year;
        });

        return view('livewire.component.dashboard', compact('Data', 'departments', 'edu_years'));
    }

    public function export()
    {
        return Excel::download(new ProjectExport, 'dashboard.csv');
    }
}
