@extends('layouts.auth')

@section('title', 'โครงงาน')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
            @livewire('auth.login')
        </div>

        @livewire('auth.cover')


    </div>
@endsection
