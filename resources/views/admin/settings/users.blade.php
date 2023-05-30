@extends('layouts.app')

@section('title', 'ข้อมูลผู้ใช้งาน')

@section('content')
    @livewire('admin.settings.users')

    <!-- View Modal -->
    @livewire('admin.settings.component.users.modal-user-view')

    <!-- Edit Modal -->
    {{-- @livewire('admin.settings.component.users.modal-user-edit') --}}
@endsection
