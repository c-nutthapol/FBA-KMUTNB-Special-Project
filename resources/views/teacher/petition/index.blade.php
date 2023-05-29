@extends('layouts.app')

@section('title', 'อนุมัติคำร้องทั่วไป')

@section('content')

    @livewire('teacher.petition.index')

    @livewire('teacher.petition.component.petition-modal-edit')

@endsection
