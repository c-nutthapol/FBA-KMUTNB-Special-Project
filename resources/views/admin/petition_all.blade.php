@extends('layouts.app')

@section('title', 'อนุมัติคำร้องทั่วไป')

@section('content')
    @livewire('teacher.petition-all.index')

    @livewire('teacher.petition-all.component.petition-modal-edit')

@endsection
