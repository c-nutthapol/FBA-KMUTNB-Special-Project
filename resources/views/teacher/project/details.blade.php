@extends('layouts.app')

@section('title', 'รายละเอียดโครงงาน')

@section('content')
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="inline-block">
                <a href="{{ route('teacher.project.home') }}"
                    class="flex flex-row items-center gap-2 text-base font-semibold text-white dark:opacity-80 dark:hover:opacity-100 fade-opacity">
                    <i class="text-xl bi bi-arrow-left"></i>
                    <span class="inline-block">
                        กลับ
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col items-center justify-between min-w-0 gap-3 px-6 py-3 break-words bg-white border border-yellow-400 border-solid shadow-xl rounded-xl sm:rounded-full sm:flex-row dark:bg-yellow-600/20 dark:shadow-dark-xl bg-clip-border">
                <div class="flex flex-row items-center">
                    <i class="text-xl text-yellow-400 bi bi-exclamation-circle-fill leading-0"></i>
                    <span class="inline-block ml-3 font-semibold tracking-wider text-yellow-400">
                        รออนุมัติหัวข้อจากที่ปรึกษา
                    </span>
                </div>
                <div class="flex flex-row gap-2">
                    <button type="button" class="text-xs text-white btn from-teal-400 to-green-400">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-check-circle-fill leading-0"></i>
                            <span class="block">อนุมัติ</span>
                        </div>
                    </button>
                    <button type="button" class="text-xs text-white btn from-rose-400 to-red-400">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-x-circle-fill leading-0"></i>
                            <span class="block">ไม่อนุมัติ</span>
                        </div>
                    </button>
                </div>
            </div>
            {{-- <div
                class="relative flex flex-row items-center justify-start min-w-0 p-4 break-words border-0 border-transparent border-solid rounded-lg shadow-xl bg-gradient-to-tl from-blue-500 to-violet-500 dark:from-blue-400 dark:to-violet-400 dark:shadow-dark-xl bg-clip-border">
                <i class="text-xl text-white bi bi-check-circle-fill leading-0"></i>
                <span class="inline-block ml-3 font-semibold tracking-wider text-white">
                    อนุมัติ
                </span>
            </div> --}}
            {{-- <div
                class="relative flex flex-row items-center justify-start min-w-0 p-4 break-words border-0 border-transparent border-solid rounded-lg shadow-xl bg-gradient-to-tl from-rose-500 to-pink-500 dark:from-rose-400 dark:to-pink-400 dark:shadow-dark-xl bg-clip-border">
                <i class="text-xl text-white bi bi-x-circle-fill leading-0"></i>
                <span class="inline-block ml-3 font-semibold tracking-wider text-white">
                    ไม่อนุมัติ
                </span>
            </div> --}}
        </div>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            {{-- ชื่อโครงงาน --}}
            <div
                class="relative flex flex-col items-center justify-start min-w-0 gap-3 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl sm:justify-between sm:flex-row dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-teal-400 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-folder-fill leading-0 dark:text-teal-400"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        <span class="block font-bold">ทดสอบการพัฒนาระบบใหม่</span>
                        <span class="block font-normal text-slate-600 dark:text-white">New Development</span>
                    </h5>
                </div>
                <div class="pb-6 sm:p-6">
                    {{-- ถ้าไม่มีเอกสารให้ซ่อน --}}
                    <a href="#" class="text-xs text-white btn from-teal-400 to-green-400">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-download leading-0"></i>
                            <span class="block">โหลดเอกสาร</span>
                        </div>
                    </a>

                    <a href="{{ route('teacher.project.suggestion') }}"
                        class="text-xs text-white btn from-blue-500 to-violet-500" type="button">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-chat-dots-fill leading-0"></i>
                            <span class="block">เสนอแนะ</span>
                        </div>
                    </a>
                </div>
            </div>


            {{-- ผู้จัดทำโครงงาน --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-mortarboard-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ผู้จัดทำโครงงาน
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                            <figure
                                class="relative flex flex-col items-center w-auto p-6 space-y-6 break-words sm:flex-row bg-slate-50 dark:bg-slate-900/40 sm:space-y-0 sm:space-x-6 rounded-4">
                                <div class="flex items-center">
                                    <img src="https://images.pexels.com/photos/325531/pexels-photo-325531.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="avatar"
                                        class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                </div>
                                <figcaption class="space-y-1 text-center sm:text-left">
                                    <div class="text-lg font-bold tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">รหัสนักศึกษา</span>:<span
                                            class="inline-block">5402041520035</span>
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">สาขาวิชา</span>:<span
                                            class="inline-block">คอมพิวเตอร์ธุรกิจ</span>
                                    </div>
                                </figcaption>
                            </figure>

                            <figure
                                class="relative flex flex-col items-center w-auto p-6 space-y-6 break-words sm:flex-row bg-slate-50 dark:bg-slate-900/40 sm:space-y-0 sm:space-x-6 rounded-4">
                                <div class="flex items-center">
                                    <img src="https://images.pexels.com/photos/2887767/pexels-photo-2887767.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="avatar"
                                        class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                </div>
                                <figcaption class="space-y-1 text-center sm:text-left">
                                    <div class="text-lg font-bold tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">รหัสนักศึกษา</span>:<span
                                            class="inline-block">5402041520035</span>
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">สาขาวิชา</span>:<span
                                            class="inline-block">คอมพิวเตอร์ธุรกิจ</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            {{-- อาจารย์ที่ปรึกษา --}}
            <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl lg:col-span-2 dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div
                        class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex items-center h-full p-3.5 rounded-3 bg-orange-500 dark:bg-slate-700/40 text-white">
                            <i class="text-2xl text-white bi bi-people-fill leading-0 dark:text-orange-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            อาจารย์ที่ปรึกษา
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="p-0 overflow-x-auto">
                            <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                                <figure
                                    class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-52 md:w-60 rounded-4">
                                    <div class="flex items-center mt-4 mb-6">
                                        <img src="https://images.pexels.com/photos/371160/pexels-photo-371160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </figcaption>
                                    <span
                                        class="absolute top-0 right-0 px-3 py-1 text-sm font-black tracking-wider text-white bg-teal-500 dark:bg-slate-900/40 rounded-bl-4 shadow-primary-outline dark:shadow-dark-xl dark:text-gray-100">
                                        ที่ปรึกษาหลัก
                                    </span>
                                </figure>

                                <figure
                                    class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-52 md:w-60 rounded-4">
                                    <div class="flex items-center mt-4 mb-6">
                                        <img src="https://images.pexels.com/photos/1574164/pexels-photo-1574164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </figcaption>
                                    <span
                                        class="absolute top-0 right-0 px-3 py-1 text-sm font-black tracking-wider text-white bg-blue-500 dark:bg-slate-900/40 rounded-bl-4 shadow-primary-outline dark:shadow-dark-xl dark:text-gray-100">
                                        ที่ปรึกษารอง
                                    </span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ประธานสอบ --}}
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div
                        class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div
                            class="flex items-center h-full p-3.5 rounded-3 bg-orange-500 dark:bg-slate-700/40 text-white">
                            <i class="text-2xl text-white bi bi-person-workspace leading-0 dark:text-orange-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            ประธานสอบ
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="p-0 overflow-x-auto">
                            <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                                <figure
                                    class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-60 rounded-4">
                                    <div class="flex items-center mt-4 mb-6">
                                        <img src="https://images.pexels.com/photos/1846597/pexels-photo-1846597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
