@extends('layouts.app')

@section('title', 'ชื่อข่าวสาร')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="flex flex-col items-start justify-start gap-1 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h5 class="mb-0 text-3xl font-bold tracking-wide dark:text-white">
                        ชื่อข่าวสาร
                    </h5>
                    <div class="flex flex-row items-center gap-2">
                        <span
                            class="inline-block text-xs font-semibold leading-tight tracking-wide text-slate-400 dark:text-slate-400">
                            <i class="bi bi-calendar2-week-fill"></i> 23/04/2566
                        </span>
                        <span class="block">|</span>
                        <span class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                            ประเภทข่าวสาร
                        </span>
                    </div>
                </div>

                <div class="flex-wrap flex-auto p-6">
                    <div class="flex flex-col gap-6">

                        <div class="block mx-auto">
                            {{-- มีรูป --}}
                            <div>
                                <img src="https://images.pexels.com/photos/23547/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    class="object-contain object-center w-full h-120 rounded-2" alt="Avatar">
                            </div>
                        </div>

                        <div class="relative max-w-full tracking-wide">
                            <p class="mb-0">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque tempora distinctio ad
                                rem repellendus aut odio eius modi laudantium nulla dolor nobis, possimus, dignissimos optio
                                consequuntur facere omnis aliquid autem.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

