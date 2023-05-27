<?php

namespace App\Traits;

use App\Models\EduTerm;
use App\Models\ProjectStepConfig;

trait CheckTermTrait
{

    /**
     * ฟังก์ชันนี้จะคืนค่าภาคการศึกษาปัจจุบันและวันที่ในรูปแบบไทย หรือข้อความที่ระบุว่าไม่มีภาคการศึกษาปัจจุบัน
     *
     * ผลลัพธ์:
     *   ฟังก์ชัน 'term()' จะคืนค่าสตริงที่แสดงภาคการศึกษาปัจจุบันและวันที่ในรูปแบบไทย ถ้ามีภาคการศึกษาปัจจุบัน
     * จะคืนค่าหมายเลขภาคการศึกษา ปีการศึกษา และวันที่ปัจจุบันในรูปแบบไทย ถ้าไม่มีภาคการศึกษาปัจจุบัน
     * จะคืนค่าข้อความว่าไม่มีกำหนดการและวันที่ปัจจุบันในรูปแบบไทย
     */

    public static function term()
    {
        $date = date('Y-m-d');
        $term = EduTerm::where('start_date', '>=', $date)->where('end_date', '<=', $date)->first();
        if ($term) {
            return 'ภาคเรียนที่ ' . $term->term . 'ปีการศึกษา ' . $term->year . ' วันที่ ' . thaidate();
        } else {
            return 'ยังไม่มีกำหนดการ วันที่ ' . thaidate();
        }
    }


    /**  ฟังก์ชัน `step()` โดยรับพารามิเตอร์สองตัว: `step` ซึ่งเป็นจำนวนเต็มและมีค่าเริ่มต้นเป็น 1 - 5
     * และ `data_format` ซึ่งจะรับค่าเป็นสตริงและมีค่าเริ่มต้นเป็น 'string' จะแสดงผลลัพธ์ ได้ 3 แบบ คือ string, array, object
     */

    public static function step(int $step = 1, string $data_format = 'string')
    {
        $dateCurrent = date('Y-m-d');
        if ($step >= 1 && $step <= 5) {
            $get_project_step = ProjectStepConfig::select('phase_' . $step . '_start_date as start_date', 'phase_' . $step . '_end_date as end_date')
                ->whereDate('phase_' . $step . '_start_date', '>=', $dateCurrent)
                ->whereDate('phase_' . $step . '_end_date', '<=', $dateCurrent)
                ->where('phase_' . $step . '_status', 1)
                ->first(); // เพิ่มเมธอด first() เพื่อดึงข้อมูลแถวแรกที่เจอ
            if ($data_format == 'string') {
                if ($get_project_step) {
                    return 'ก่อน ' . $get_project_step->end_date->thaidate('j M y');
                } else {
                    return 'รอกำหนดการ';
                }
            } elseif ($data_format == 'array') {
                if ($get_project_step) {
                    return [
                        'start_date' => $get_project_step->start_date->toDateString(),
                        'end_date' => $get_project_step->end_date->toDateString()
                    ];
                } else {
                    return [
                        'error' => 'ไม่พบกำหนดการ'
                    ];
                }
            } elseif ($data_format == 'object') {
                if ($get_project_step) {
                    return (object) [
                        'start_date' => $get_project_step->start_date->toDateString(),
                        'end_date' => $get_project_step->end_date->toDateString()
                    ];
                } else {
                    return (object) [
                        'error' => 'ไม่พบกำหนดการ'
                    ];
                }
            } else {
                return abort(400);
            }
        } else {
            return abort(400);
        }
    }
}
