@extends('layouts.mail')
@section('content')
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('assets/img/logos/logo-fba.png') }}" style="width: 100%; height: 100%;" />
            </div>
            <h1>โครงงานพิเศษ คณะบริหารธุรกิจ</h1>
        </div>
        <div class="content">
            <p>เรียนคุณ : {{ $user->displayname }}</p>
            <p>สถานะโครงงานพิเศษขั้นตอน{{ $project->master_status->name }}</p>
            <div class="content-status">
                <span>{{ $project->master_status->status }}</span>
            </div>
        </div>
        <div class="footer">
            <span>Copyright © - คณะบริหารธุรกิจ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</span>
        </div>
    </div>
@endsection
