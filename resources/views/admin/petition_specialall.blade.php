@extends('layouts.app')

@section('title', 'อนุมัติคำร้องทั่วไป')

@section('content')
    @livewire('teacher.petition-specialall.index')

    @livewire('teacher.petition-specialall.component.petition-modal-edit')

@endsection
