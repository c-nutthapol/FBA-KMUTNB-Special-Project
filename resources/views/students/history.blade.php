@extends('layouts.app')

@section('title', 'โครงงาน')

@section('content')

    @livewire('students.history')
    @livewire('students.component.history.modal-change-request')

@endsection

