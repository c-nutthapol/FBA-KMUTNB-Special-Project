@extends('layouts.app')

@section('title', 'แบนเนอร์')

@section('content')
    @livewire('admin.settings.banners')


    <!-- Create Modal -->
    @livewire('admin.settings.component.banners.modal-create')


    <!-- Edit Modal -->
    @livewire('admin.settings.component.banners.modal-edit')
@endsection
