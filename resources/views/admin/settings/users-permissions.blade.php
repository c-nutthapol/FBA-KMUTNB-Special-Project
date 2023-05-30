@extends('layouts.app')

@section('title', 'กำหนดสิทธิ์ผู้ใช้งาน')

@section('content')
    @livewire('admin.settings.permissions')

   <!-- View Modal -->
   @livewire('admin.settings.component.users.modal-user-view')
@endsection
