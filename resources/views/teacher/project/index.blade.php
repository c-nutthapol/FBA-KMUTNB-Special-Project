@extends('layouts.app')

@section('title', 'ลงทะเบียนโครงงานพิเศษ')

@section('content')
    @livewire('teacher.project.component.pending-approval')

    @livewire('teacher.project.index')
@endsection
