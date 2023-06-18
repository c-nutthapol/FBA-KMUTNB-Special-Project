@extends('layouts.app')

@section('title', 'ผลการสอบความก้าวหน้า')

@section('content')
    @livewire('teacher.project.component.pending-approval')
    {{-- @dd(55) --}}
    @livewire('teacher.project.progressresult')
@endsection
