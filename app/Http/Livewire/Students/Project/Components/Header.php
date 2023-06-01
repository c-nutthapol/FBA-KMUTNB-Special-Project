<?php

namespace App\Http\Livewire\Students\Project\Components;

use App\Models\Project;
use App\Traits\CheckTermTrait;
use App\Traits\ProjectTrait;
use Livewire\Component;
use stdClass;

class Header extends Component
{
    use CheckTermTrait, ProjectTrait;
    public Project $project;
    public int $step;
    public function render()
    {
        $data = new stdClass();
        $data->project = $this->project;
        $data->term = $this->getTerm();
        $this->step = $this->checkStep($this->project);
        $data->step_name = collect([
            "1" => "ลงทะเบียนโครงงานพิเศษ",
            "2" => "ลงทะเบียนเพื่อขอสอบหัวข้อ",
            "3" => "สอบความก้าวหน้า",
            "4" => "สอบป้องกัน",
            "5" => "ส่งเล่ม",
        ]);
        if (!$data->term->id) {
            $this->step = 0;
        }
        $data->step_date = collect([
            "2" => "ก่อน " . dateThai($data->term->project_step?->phase_2_end_date),
            "1" => "ก่อน " . dateThai($data->term->project_step?->phase_1_end_date),
            "3" => "ก่อน " . dateThai($data->term->project_step?->phase_3_end_date),
            "4" => "ก่อน " . dateThai($data->term->project_step?->phase_4_end_date),
            "5" => "ก่อน " . dateThai($data->term->project_step?->phase_5_end_date),
        ]);
        return view("livewire.students.project.components.header", compact("data"));
    }
}
