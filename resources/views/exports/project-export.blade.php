<table>
    <thead>
        <tr>
            <th>ชื่อโครงงาน (ภาษาไทย)</th>
            <th>ชื่อโครงงาน (ภาษาอังกฤษ)</th>
            <th>ชื่อนักศึกษาคนที่ 1</th>
            <th>สาขาวิชา</th>
            <th>ห้อง</th>
            <th>ชื่อนักศึกษาคนที่ 2</th>
            <th>สาขาวิชา</th>
            <th>ห้อง</th>
            <th>ที่ปรึกษาหลัก</th>
            <th>ที่ปรึกษาร่วม/กรรมการสอบ</th>
            <th>ประธานสอบ</th>
            <th>สถานะโครงงาน</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $key => $project)
            <tr>
                <td>{{ $project->name_th }}</td>
                <td>{{ $project->name_en }}</td>
                @php
                    $student1 = $project->user_project->where('role', 'student1')->first();
                    $student2 = $project->user_project->where('role', 'student2')->first();
                    $teacher1 = $project->user_project->where('role', 'teacher1')->first();
                    $teacher2 = $project->user_project->where('role', 'teacher2')->first();
                    $teacher3 = $project->user_project->where('role', 'teacher3')->first();
                @endphp

                <td>{{ $student1->user->displayname ?? '' }}</td>
                <td>{{ $student1->user->masterDepartment->name ?? '' }}</td>
                <td>{{ $student1->user->room ?? '' }}</td>
                <td>{{ $student2->user->displayname ?? '' }}</td>
                <td>{{ $student2->user->masterDepartment->name ?? '' }}</td>
                <td>{{ $student2->user->room ?? '' }}</td>
                <td>{{ $teacher1->user->displayname ?? '' }}</td>
                <td>{{ $teacher2->user->displayname ?? '' }}</td>
                <td>{{ $teacher3->user->displayname ?? '' }}</td>
                <td>{{ $project->master_status->status ?? '' }}</td>

            </tr>
        @endforeach

    </tbody>
</table>
