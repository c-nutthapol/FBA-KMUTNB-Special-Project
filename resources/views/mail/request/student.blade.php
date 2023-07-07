@extends('layouts.mail')
@section('content')
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('assets/img/logos/logo-fba.png') }}" style="width: 100%; height: 100%;"/>
            </div>
            <h1>โครงงานพิเศษ คณะบริหารธุรกิจ</h1>
        </div>
        <div class="content">
            <p>เรียนคุณ : {{ $user->displayname }}</p>
            <p>โครงงานพิเศษ : {{$project->name_th}}</p>
            <p>คำร้องทั่วไป : {{ $student_request->master_requests->name}}</p>
            <p>สถานะ : {{ $student_request->master_status->status }}</p>
            <div class="content-status">
                <span>
                    @if ($student_request->teacher_remark)
                        หมายเหตุ : {{ $student_request->teacher_remark }}
                    @elseif($student_request->admin_remark)
                        หมายเหตุ : {{ $student_request->admin_remark }}
                    @endif
                </span>
            </div>
        </div>
        <div class="footer">
            <span>Copyright © - คณะบริหารธุรกิจ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ โทร. 038-627000 ต่อ 5536</span>
        </div>
    </div>
@endsection
