@extends('layouts.app')

@section('title', 'โครงงาน')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            {{-- ชื่อโครงงาน --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center space-x-4 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-teal-500 dark:bg-slate-700/40 text-white">
                        <i class="bi bi-folder-fill leading-0 text-2xl text-white dark:text-teal-500"></i>
                    </div>
                    <h5 class="dark:text-white mb-0 tracking-wide">
                        <span class="block font-bold">ทดสอบการพัฒนาระบบใหม่</span>
                        <span class="block font-normal text-slate-600 dark:text-white">New Development</span>
                    </h5>
                </div>
            </div>

            {{-- ผู้จัดทำโครงงาน --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center space-x-4 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="bi bi-mortarboard-fill leading-0 text-2xl text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="dark:text-white mb-0 tracking-wide">
                        ผู้จัดทำโครงงาน
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <div class="flex justify-center sm:justify-start flex-wrap gap-6">
                            <figure
                                class=" flex flex-col sm:flex-row items-center relative bg-slate-50 dark:bg-slate-900/40 w-auto break-words p-6 space-y-6 sm:space-y-0 sm:space-x-6 rounded-4">
                                <div class="flex items-center">
                                    <img src="https://images.pexels.com/photos/325531/pexels-photo-325531.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="avatar"
                                        class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                </div>
                                <figcaption class="space-y-1 text-center sm:text-left">
                                    <div class="font-bold text-lg tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </div>
                                    <div
                                        class="text-base font-normal text-slate-600 tracking-wide dark:text-gray-100 space-x-2">
                                        <span class="inline-block">รหัสนักศึกษา</span>:<span
                                            class="inline-block">5402041520035</span>
                                    </div>
                                    <div
                                        class="text-base font-normal text-slate-600 tracking-wide dark:text-gray-100 space-x-2">
                                        <span class="inline-block">สาขาวิชา</span>:<span
                                            class="inline-block">คอมพิวเตอร์ธุรกิจ</span>
                                    </div>
                                </figcaption>
                            </figure>

                            <figure
                                class=" flex flex-col sm:flex-row items-center relative bg-slate-50 dark:bg-slate-900/40 w-auto break-words p-6 space-y-6 sm:space-y-0 sm:space-x-6 rounded-4">
                                <div class="flex items-center">
                                    <img src="https://images.pexels.com/photos/2887767/pexels-photo-2887767.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="avatar"
                                        class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                </div>
                                <figcaption class="space-y-1 text-center sm:text-left">
                                    <div class="font-bold text-lg tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </div>
                                    <div
                                        class="text-base font-normal text-slate-600 tracking-wide dark:text-gray-100 space-x-2">
                                        <span class="inline-block">รหัสนักศึกษา</span>:<span
                                            class="inline-block">5402041520035</span>
                                    </div>
                                    <div
                                        class="text-base font-normal text-slate-600 tracking-wide dark:text-gray-100 space-x-2">
                                        <span class="inline-block">สาขาวิชา</span>:<span
                                            class="inline-block">คอมพิวเตอร์ธุรกิจ</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                {{-- อาจารย์ที่ปรึกษา --}}
                <div
                    class="relative flex flex-col lg:col-span-2 min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div
                        class="flex items-center space-x-4 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex items-center h-full p-3.5 rounded-3 bg-orange-500 dark:bg-slate-700/40 text-white">
                            <i class="bi bi-people-fill leading-0 text-2xl text-white dark:text-orange-500"></i>
                        </div>
                        <h5 class="dark:text-white mb-0 tracking-wide">
                            อาจารย์ที่ปรึกษา
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="p-0 overflow-x-auto">
                            <div class="flex  justify-center sm:justify-start flex-wrap gap-6">
                                <figure
                                    class=" flex flex-col items-center relative bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-52 md:w-60 break-words p-6 rounded-4 overflow-hidden">
                                    <div class="flex items-center mb-6 mt-4">
                                        <img src="https://images.pexels.com/photos/371160/pexels-photo-371160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="font-bold text-lg tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </figcaption>
                                    <span
                                        class="absolute top-0 right-0 text-sm font-black bg-teal-500 dark:bg-slate-900/40 rounded-bl-4 py-1 px-3 text-white shadow-primary-outline dark:shadow-dark-xl tracking-wider dark:text-gray-100">
                                        ที่ปรึกษาหลัก
                                    </span>
                                </figure>

                                <figure
                                    class=" flex flex-col items-center relative bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-52 md:w-60 break-words p-6 rounded-4 overflow-hidden">
                                    <div class="flex items-center mb-6 mt-4">
                                        <img src="https://images.pexels.com/photos/1574164/pexels-photo-1574164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="font-bold text-lg tracking-wide dark:text-white">
                                        สมชาย นามสกุล
                                    </figcaption>
                                    <span
                                        class="absolute top-0 right-0 text-sm font-black bg-blue-500 dark:bg-slate-900/40 rounded-bl-4 py-1 px-3 text-white shadow-primary-outline dark:shadow-dark-xl tracking-wider dark:text-gray-100">
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
                        class="flex items-center space-x-4 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex items-center h-full p-3.5 rounded-3 bg-orange-500 dark:bg-slate-700/40 text-white">
                            <i class="bi bi-person-workspace leading-0 text-2xl text-white dark:text-orange-500"></i>
                        </div>
                        <h5 class="dark:text-white mb-0 tracking-wide">
                            ประธานสอบ
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="p-0 overflow-x-auto">
                            <div class="flex  justify-center sm:justify-start flex-wrap gap-6">
                                <figure
                                    class=" flex flex-col items-center relative bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-60 break-words p-6 rounded-4 overflow-hidden">
                                    <div class="flex items-center mb-6 mt-4">
                                        <img src="https://images.pexels.com/photos/1846597/pexels-photo-1846597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="font-bold text-lg tracking-wide dark:text-white">
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
