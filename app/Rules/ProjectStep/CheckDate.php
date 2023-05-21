<?php

namespace App\Rules\ProjectStep;

use App\Models\EduTerm;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckDate implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public $attributes = [
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
    ];

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->id) {
            $record = EduTerm::find($this->id);
            $start_date = strtotime($record->start_date->toDateString());
            $end_date = strtotime($record->end_date->toDateString());
            $check_date = strtotime($value);

            if ($record && !($check_date >= $start_date && $check_date <= $end_date)) {
                $fail($this->attributes[$attribute] . ' ไม่สามารถใช้ได้');
            }
        }
    }
}
