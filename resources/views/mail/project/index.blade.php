<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <p>แจ้งเตือนการอัพเดทสถานะโครงงานพิเศษ</p>
    <p>เรียนคุณ : {{$user->displayname}}</p>
    <p>สถานะโครงงานพิเศษขั้นตอน{{$project->master_status->name}} : {{$project->master_status->status}}</p>
</body>
</html>
