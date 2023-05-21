@extends('layouts.app')

@section('title', 'ขั้นตอนโครงงาน')

@section('content')

    @livewire('admin.settings.project-steps')

    <!-- Create Modal -->
    @livewire('admin.settings.component.project-steps.modal-create')

    <!-- Edit Modal -->
    @livewire('admin.settings.component.project-steps.modal-edit')

@endsection
@section('script')
@endsection
