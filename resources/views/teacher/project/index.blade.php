@extends('layouts.app')

@section('title', 'โครงงานที่รับผิดชอบ')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            {{-- ข้อเสนอแนะ --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-archive-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        โครงงานที่รับผิดชอบ
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 tracking-wide align-top border-gray-200 dark:border-slate-600 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        ชื่อโครงงาน
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        นักศึกษา
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        สถานะ
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        รายละเอียด
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row items-center gap-2">
                                            <div
                                                class="flex items-center h-full p-2.5 rounded-1.75 bg-teal-400 dark:bg-slate-700/40 text-white">
                                                <i
                                                    class="text-xs text-white bi bi-folder-fill leading-0 dark:text-teal-500"></i>
                                            </div>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-slate-400">
                                                ทดสอบการพัฒนาระบบใหม่
                                                <span
                                                    class="block text-xs font-normal text-slate-600 dark:text-white dark:opacity-60">New
                                                    Development
                                                </span>
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row justify-center -space-x-4">
                                            <img class="object-cover object-center border-2 border-white rounded-full w-9 h-9 dark:border-gray-800"
                                                src="https://images.pexels.com/photos/325531/pexels-photo-325531.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                alt="" data-tooltip-target="tooltip-student1" />
                                            <div id="tooltip-student1" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-normal tracking-wide text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                ชื่อ นามสกุล
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>

                                            <img class="object-cover object-center border-2 border-white rounded-full w-9 h-9 dark:border-gray-800"
                                                src="https://images.pexels.com/photos/2887767/pexels-photo-2887767.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                alt="" data-tooltip-target="tooltip-student2" />
                                            <div id="tooltip-student2" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-normal tracking-wide text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                ชื่อ นามสกุล
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                                            รออนุมัติหัวข้อจากที่ปรึกษา
                                        </span>
                                        <span
                                            class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-emerald-500 to-teal-400 align-baseline font-bold uppercase leading-none text-white">
                                            อนุมัติ
                                        </span>
                                        <span
                                            class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-red-600 to-orange-600 align-baseline font-bold uppercase leading-none text-white">
                                            ไม่อนุมัติ
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <a href="{{ route('teacher.project.details') }}"
                                            class="text-xs text-white btn from-blue-500 to-violet-500">
                                            <div class="flex flex-row items-center gap-3">
                                                <i class="bi bi-eye-fill leading-0"></i>
                                                <span class="block">ดูรายละเอียด</span>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
