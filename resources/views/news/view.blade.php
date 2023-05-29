@extends('layouts.app')

@section('title', 'ชื่อข่าวสาร')

@section('content')

    @livewire('admin.settings.news.view', ['new_id' => $id])

@endsection
