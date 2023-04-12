<?php

if (!function_exists("dateThai")) {
    function dateThai($date, $isShort = false)
    {
        $date = date_create($date);
        $month = [
            "January" => "มกราคม",
            "February" => "กุมภาพันธ์",
            "March" => "มีนาคม",
            "April" => "เมษายน",
            "May" => "พฤษภาคม",
            "June" => "มิถุนายน",
            "July" => "กรกฎาคม",
            "August" => "สิงหาคม",
            "September" => "กันยายน",
            "October" => "ตุลาคม",
            "November" => "พฤศจิกายน",
            "December" => "ธันวาคม",
        ];
        $monthShort = [
            "Jan" => "ม.ค.",
            "Feb" => "ก.พ.",
            "Mar" => "มี.ค.",
            "Apr" => "เม.ย.",
            "May" => "พ.ค.",
            "Jun" => "มิ.ย.",
            "Jul" => "ก.ค.",
            "Aug" => "ส.ค.",
            "Sep" => "ก.ย.",
            "Oct" => "ต.ค.",
            "Nov" => "พ.ย.",
            "Dec" => "ธ.ค.",
        ];
        $day = [
            "Monday" => "วันจันทร์",
            "Tuesday" => "วันอังคาร",
            "Wednesday" => "วันพุธ",
            "Thursday" => "วันพฤหัสบดี",
            "Friday" => "วันศุกร์",
            "Saturday" => "วันเสาร์",
            "Sunday" => "วันอาทิตย์",
        ];
        $dayShort = [
            "Mon" => "จ.",
            "Tue" => "อ.",
            "Wed" => "พ.",
            "Thu" => "พฤ.",
            "Fri" => "ศ.",
            "Sat" => "ส.",
            "Sun" => "อา.",
        ];
        if ($isShort) {
            $date = str_replace(array_keys($monthShort), array_values($monthShort), date_format($date, "j M Y"));
            $date = str_replace(array_keys($dayShort), array_values($dayShort), $date);
            $date = str_replace(date("Y"), str_split(date("Y") + 543, 2)[1], $date);
            return $date;
        } else {
            $date = str_replace(array_keys($month), array_values($month), date_format($date, "j F Y"));
            $date = str_replace(array_keys($day), array_values($day), $date);
            $date = str_replace(date("Y"), date("Y") + 543, $date);
        }
        return $date;
    }
}
