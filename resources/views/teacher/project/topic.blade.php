@extends('layouts.app')

@section('title', 'ยื่นขอสอบความก้าวหน้า')

@section('content')
    {{-- @livewire('teacher.project.component.pending-approval') --}}

    @livewire('teacher.project.topic')
    @livewire('teacher.project.component.dropdown-list')

@endsection
