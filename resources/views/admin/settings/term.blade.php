@extends('layouts.app')

@section('title', 'ภาคเรียน')

@section('content')
    @livewire('admin.settings.term')

    <!-- Create Modal -->
    @livewire('admin.settings.component.term.modal-create')

    <!-- Edit Modal -->
    @livewire('admin.settings.component.term.modal-edit')
@endsection
@section('script')
@endsection
