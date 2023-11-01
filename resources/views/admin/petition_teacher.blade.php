@extends('layouts.app')

@section('title', 'อนุมัติคำร้องทั่วไป (ที่ปรึกษา)')

@section('content')
    @livewire('teacher.petition-teacher.index')

    @livewire('teacher.petition-teacher.component.petition-modal-edit')
@endsection
