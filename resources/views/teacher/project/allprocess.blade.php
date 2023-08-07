@extends('layouts.app')

@section('title', 'ส่งเล่ม')

@section('content')
    {{-- @livewire('teacher.project.component.pending-approval') --}}
    @livewire('teacher.project.allprocess')
    @livewire('teacher.project.component.dropdown-list')

@endsection
