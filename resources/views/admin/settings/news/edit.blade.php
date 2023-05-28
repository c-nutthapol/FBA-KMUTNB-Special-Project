@extends('layouts.app')

@section('title', 'แก้ไขข่าวสาร')

@section('content')
    @livewire('admin.settings.news.edit', ['new_id' => $id])
@endsection
