<?php

namespace App\Exports;

use App\Models\Project;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Excel;

class ProjectExport implements FromView, Responsable
{
    use Exportable;

    protected $data;

    private $headers = [
        'Content-Type' => "text/csv; charset=UTF-8",
    ];

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function view(): View
    {
        $projects = $this->data;

        return view("exports.project-export", compact("projects"));
    }
}
