<?php

namespace App\Rules\ProjectStep;

use App\Models\EduTerm;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class CheckDate implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param Closure(string): PotentiallyTranslatedString $fail
     */
    public $id;
    public $attributes = [
        'phase_1_start_date' => 'วันที่เริ่ม สอบหัวข้อ',
        'phase_2_start_date' => 'วันที่เริ่ม ลงทะเบียนเพื่อขอสอบหัวข้อ',
        'phase_3_start_date' => 'วันที่เริ่ม ยื่นขอสอบความก้าวหน้า',
        'phase_4_start_date' => 'วันที่เริ่ม ยื่นขอสอบป้องกัน',
        'phase_1_end_date' => 'วันที่สิ้นสุด สอบหัวข้อ',
        'phase_2_end_date' => 'วันที่สิ้นสุด ลงทะเบียนเพื่อขอสอบหัวข้อ',
        'phase_3_end_date' => 'วันที่สิ้นสุด ยื่นขอสอบความก้าวหน้า',
        'phase_4_end_date' => 'วันที่สิ้นสุด ยื่นขอสอบป้องกัน',
        'book_approval_end' => 'วันที่สิ้นสุด อนุมัติเล่ม'
    ];

    public function __construct($id)
    {
        $this->id = $id;
    }

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
