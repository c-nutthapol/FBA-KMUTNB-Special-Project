@extends('layouts.app')

@section('title', 'ยื่นขอสอบป้องกัน')

@section('content')
    {{-- @livewire('teacher.project.component.pending-approval') --}}

    @livewire('teacher.project.defense')
    @livewire('teacher.project.component.dropdown-list')

@endsection
