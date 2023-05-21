<?php

namespace App\Rules\Term;

use App\Models\EduTerm;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EditEndDate implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public $id;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $results = EduTerm::whereNot('id', $this->id)->get();

        foreach ($results as $result) {
            $start_date = strtotime($result->start_date);
            $end_date = strtotime($result->end_date);
            $check_date = strtotime($value);
            if ($check_date >= $start_date && $check_date <= $end_date) {
                $fail('วันที่จบภาคเรียน นี้ไม่สามารถใช้ได้');
            }
        }
    }
}
