@extends('layouts.app')

@section('title', 'แบนเนอร์')

@section('content')

    @livewire('admin.settings.master.cover')


    <!-- Create Modal -->
    @livewire('admin.settings.component.conver.modal-create')


    <!-- Edit Modal -->
    @livewire('admin.settings.component.conver.modal-edit')
@endsection
