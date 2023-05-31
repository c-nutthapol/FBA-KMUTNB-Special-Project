<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <p>แจ้งเตือนการอัพเดทสถานะคำร้องทั่วไป</p>
    <p>เรียนคุณ : {{$user->displayname}}</p>
    <p>รายละเอียดคำร้องทั่วไป : {{$student_request->description}}</p>
    <p>สถานะคำร้องทั่วไป : {{$student_request->master_status->status}}</p>
    @if ($student_request->teacher_remark)
     <p>หมายเหตุ : {{$student_request->teacher_remark}}</p>
    @elseif($student_request->admin_remark)
    <p>หมายเหตุ : {{$student_request->admin_remark}}</p>
    @endif
</body>

</html>
