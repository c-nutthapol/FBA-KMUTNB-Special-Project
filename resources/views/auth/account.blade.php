@extends('layouts.app')

@section('title', 'บัญชีผู้ใช้')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div
                        class="flex items-center h-full p-3.5 rounded-3 bg-gradient-to-tl from-blue-500 to-violet-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-person-fill leading-0 dark:text-slate-300"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-slate-300">
                        บัญชีผู้ใช้
                    </h5>
                </div>
                @livewire('auth.account')
            </div>

        </div>
    </div>
@endsection
