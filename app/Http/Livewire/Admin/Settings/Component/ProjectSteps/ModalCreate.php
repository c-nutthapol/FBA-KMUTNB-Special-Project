<?php

namespace App\Http\Livewire\Admin\Settings\Component\ProjectSteps;

use App\Models\EduTerm;
use App\Rules\ProjectStep\CheckDate;
use Livewire\Component;

class ModalCreate extends Component
{
    protected $listeners = ['getProjectStepCreate'];

    public function render()
    {
        $edu_terms = EduTerm::doesntHave('project_step')->get();
        return view('livewire.admin.settings.component.project-steps.modal-create', compact('edu_terms'));
    }

    public function getProjectStepCreate()
    {
        $this->reset('edu_term_id');
        for ($i = 1; $i <= 5; $i++) {
            $this->reset('phase_' . $i . '_start_date', 'phase_' . $i . '_end_date', 'phase_' . $i . '_status');
        }
        $this->resetValidation();
    }

    public $edu_term_id;
    public $phase_1_start_date, $phase_1_end_date, $phase_1_status = false;
    public $phase_2_start_date, $phase_2_end_date, $phase_2_status = false;
    public $phase_3_start_date, $phase_3_end_date, $phase_3_status = false;
    public $phase_4_start_date, $phase_4_end_date, $phase_4_status = false;
    public $phase_5_start_date, $phase_5_end_date, $phase_5_status = false;

    protected function rules()
    {
        $arr = [];
        $arr['edu_term_id'] = ['required', 'unique:project_step_configs,id'];
        for ($i = 1; $i < 5; $i++) {
            if ($i == 1) {
                $arr['phase_' . $i . '_start_date'] = ['nullable', 'date', new CheckDate($this->edu_term_id)];
                $arr['phase_' . $i . '_end_date'] = ['nullable', 'date', 'after_or_equal:phase_' . $i . '_start_date', new CheckDate($this->edu_term_id)];
                $arr['phase_' . $i . '_status'] = ['boolean'];
            } else {
                $arr['phase_' . $i . '_start_date'] = ['nullable', 'date', 'after:phase_' . $i - 1 . '_end_date', new CheckDate($this->edu_term_id)];
                $arr['phase_' . $i . '_end_date'] = ['nullable', 'date', 'after_or_equal:phase_' . $i . '_start_date', new CheckDate($this->edu_term_id)];
                $arr['phase_' . $i . '_status'] = ['boolean'];
            }
        }
        return  $arr;
    }

    protected $attributes = [
        'edu_term_id' => 'ภาคเรียน/ปีการศึกษา',
        'phase_1_start_date' => 'วันที่เริ่ม ลงทะเบียนโครงงานพิเศษ',
        'phase_2_start_date' => 'วันที่เริ่ม ลงทะเบียนเพื่อขอสอบหัวข้อ',
        'phase_3_start_date' => 'วันที่เริ่ม ยื่นขอสอบความก้าวหน้า',
        'phase_4_start_date' => 'วันที่เริ่ม ยื่นขอสอบป้องกัน',
        'phase_5_start_date' => 'วันที่เริ่ม ส่งเล่ม',
        'phase_1_end_date' => 'วันที่สิ้นสุด ลงทะเบียนโครงงานพิเศษ',
        'phase_2_end_date' => 'วันที่สิ้นสุด ลงทะเบียนเพื่อขอสอบหัวข้อ',
        'phase_3_end_date' => 'วันที่สิ้นสุด ยื่นขอสอบความก้าวหน้า',
        'phase_4_end_date' => 'วันที่สิ้นสุด ยื่นขอสอบป้องกัน',
        'phase_5_end_date' => 'วันที่สิ้นสุด ส่งเล่ม',
        'phase_1_status' => 'สถานะ ลงทะเบียนโครงงานพิเศษ',
        'phase_2_status' => 'สถานะ ลงทะเบียนเพื่อขอสอบหัวข้อ',
        'phase_3_status' => 'สถานะ ยื่นขอสอบความก้าวหน้า',
        'phase_4_status' => 'สถานะ ยื่นขอสอบป้องกัน',
        'phase_5_status' => 'สถานะ ส่งเล่ม',
    ];

    public function submit()
    {
        $validatedData = $this->validate($this->rules(), __('validation'), $this->attributes);
        try {
            $create = EduTerm::find($this->edu_term_id);
            unset($validatedData['edu_term_id']);
            $create->project_step()->create($validatedData);
            $this->emit('alert', ['status' => 'success', 'title' => 'บันทึกข้อมูลเสร็จสิ้น']);
            $this->emit('refreshProjectSteps');
        } catch (\Exception $e) {
            $this->emit('alert', ['status' => 'error', 'title' => 'เกิดข้อผิดพลาด', 'text' => $e->getMessage()]);
        }
    }
}
