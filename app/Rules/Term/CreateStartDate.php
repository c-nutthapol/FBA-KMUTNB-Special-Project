<?php

namespace App\Rules\Term;

use App\Models\EduTerm;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CreateStartDate implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $record = EduTerm::orderBy('end_date', 'DESC')->first();
        $end_date = strtotime($record->end_date);
        $check_date = strtotime($value);
        if ($record && $end_date >= $check_date) {
            $fail('วันที่เริ่มภาคเรียน นี้ไม่สามารถใช้ได้');
        }
    }
}
