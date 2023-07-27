@extends('layouts.app')

@section('title', 'สอบหัวข้อ')

@section('content')
    {{-- @livewire('teacher.project.component.pending-approval') --}}
    @livewire('teacher.project.index')
    @livewire('teacher.project.component.dropdown-list')

@endsection
