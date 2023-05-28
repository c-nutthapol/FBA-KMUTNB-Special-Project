@extends('layouts.app')

@section('title', 'เสนอแนะโครงงาน')

@section('content')

    @livewire('teacher.project.suggestion',['id' => $id])
    @livewire('teacher.project.component.suggestion-modal-create',['id' => $id])
    @livewire('teacher.project.component.suggestion-modal-edit',['id' => $id])

@endsection
