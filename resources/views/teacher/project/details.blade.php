@extends('layouts.app')

@section('title', 'รายละเอียดโครงงาน')
@section('content')

    @livewire('teacher.project.detail',['id' => $id])
@endsection
