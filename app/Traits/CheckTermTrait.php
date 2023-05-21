<?php

namespace App\Traits;

use App\Models\EduTerm;

trait CheckTermTrait
{
    public function term()
    {
        $date = date('Y-m-d');
        $term = EduTerm::where('start_date', '>=', $date)->where('end_date', '<=', $date)->first();
        if ($term) {
            return 'ภาคเรียนที่ ' . $term->term . 'ปีการศึกษา ' . $term->year . ' วันที่ ' . thaidate();
        } else {
            return 'ยังไม่มีกำหนดการ วันที่ ' . thaidate();
        }
    }

    public function step($step = '1', $date)
    {

    }
}
