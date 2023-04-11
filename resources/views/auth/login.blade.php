@extends('layouts.auth')

@section('title', 'โครงงาน')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
            @livewire('auth.login')
        </div>
        <div
            class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
            <div class="relative flex flex-col justify-center h-full bg-cover bg-right-top px-24 m-4 overflow-hidden w-full rounded-xl"
                style="background-image: url('{{ asset('assets/img/bg/bg-login-1.jpg') }}')">
                <span
                    class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-70"></span>
                <h4 class="z-20 mt-12 font-bold text-white">"คณะบริหารธุรกิจ"
                </h4>
                <p class="z-20 text-white ">
                    มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ
                </p>
            </div>
        </div>
    </div>
@endsection
