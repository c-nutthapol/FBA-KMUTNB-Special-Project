<?php

namespace App\Http\Livewire\Students\Project\Components;

use App\Traits\ProjectTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use stdClass;

class Header extends Component
{
    use ProjectTrait;

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $data = new stdClass();
        $data->step_name = collect([
            "1" => "สอบหัวข้อ",
            "2" => "สอบความก้าวหน้า",
            "3" => "สอบป้องกัน",
            "4" => "ส่งเล่ม",
        ]);
        $data->step_date = collect([
            "1" => dateThai($this->term->project_step->phase_1_start_date ?? '') ." ถึง ". dateThai($this->term->project_step->phase_1_end_date ?? ''),
            "2" => dateThai($this->term->project_step->phase_2_start_date ?? '') ." ถึง ". dateThai($this->term->project_step->phase_2_end_date ?? ''),
            "3" => dateThai($this->term->project_step->phase_3_start_date ?? '') ." ถึง ". dateThai($this->term->project_step->phase_3_end_date ?? ''),
            "4" => dateThai($this->term->project_step->phase_4_start_date ?? '') ." ถึง ". dateThai($this->term->project_step->phase_4_end_date ?? ''),
        ]);
        return view("livewire.students.project.components.header", compact("data"));
    }


}
