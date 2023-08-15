@extends('layouts.app')

@section('title', 'อนุมัติคำร้องทั่วไป')

@section('content')
    @livewire('teacher.petition-special.index')

    @livewire('teacher.petition-special.component.petition-modal-edit')

@endsection
