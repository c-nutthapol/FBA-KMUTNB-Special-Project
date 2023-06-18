@extends('layouts.app')

@section('title', 'โครงงาน')

@section('content')
    @livewire('students.project.components.header')

    @livewire('students.project.create')
@endsection

