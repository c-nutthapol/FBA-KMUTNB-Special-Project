<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\ProjectStepConfig;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectSteps extends Component
{
    use WithPagination;

    protected $paginationTheme = 'default';

    protected $listeners = ['refreshProjectSteps' => '$refresh'];


    public function render()
    {
        $project_steps = ProjectStepConfig::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.settings.project-steps', compact('project_steps'));
    }

    public function delete($id)
    {
        try {
            $record = ProjectStepConfig::find($id);
            if ($record) {
                $check_date = strtotime(date('Y-m-d'));
                $phase_1_start_date = strtotime($record->phase_1_start_date);
                $phase_2_start_date = strtotime($record->phase_2_start_date);
                $phase_3_start_date = strtotime($record->phase_3_start_date);
                $phase_4_start_date = strtotime($record->phase_4_start_date);
                $phase_5_start_date = strtotime($record->phase_5_start_date);
                $phase_1_end_date = strtotime($record->phase_1_end_date);
                $phase_2_end_date = strtotime($record->phase_2_end_date);
                $phase_3_end_date = strtotime($record->phase_3_end_date);
                $phase_4_end_date = strtotime($record->phase_4_end_date);

                $a = ($check_date >= $phase_1_start_date && $check_date <= $phase_1_end_date);
                $b = ($check_date >= $phase_2_start_date && $check_date <= $phase_2_end_date);
                $c = ($check_date >= $phase_3_start_date && $check_date <= $phase_3_end_date);
                $d = ($check_date >= $phase_4_start_date && $check_date <= $phase_4_end_date);

                if (!($a || $b || $c || $d)) {
                    $record->delete();
                    $this->emit('alert', ['status' => 'success', 'title' => 'ลบข้อมูลเสร็จสิ้น']);
                } else {
                    $this->emit('alert', ['status' => 'info', 'title' => 'ไม่สามารถลบข้อมูลได้', 'text' => 'เนื่องจากยังใช้งานอยู่']);
                }
            }
        } catch (Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
