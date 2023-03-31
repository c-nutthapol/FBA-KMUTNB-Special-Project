@extends('layouts.app')

@section('title', 'เสนอแนะโครงงาน')

@section('content')
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="inline-block">
                <a href="{{ route('teacher.project.details') }}"
                    class="flex flex-row items-center gap-2 text-base font-semibold text-white dark:opacity-80 dark:hover:opacity-100 fade-opacity">
                    <i class="text-xl bi bi-arrow-left"></i>
                    <span class="inline-block">
                        กลับ
                    </span>
                </a>
            </div>
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

                    <button class="text-xs text-white btn from-blue-500 to-violet-500" type="button"
                        data-drawer-target="drawer-setting" data-drawer-show="drawer-setting" data-drawer-placement="bottom"
                        data-drawer-edge="true" data-drawer-edge-offset="bottom-[60px]" aria-controls="drawer-setting">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-gear-fill leading-0"></i>
                            <span class="block">ตั้งค่า</span>
                        </div>
                    </button>
                </div>
            </div>

            {{-- ข้อเสนอแนะ --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-chat-dots-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ข้อเสนอแนะ
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
                                        ชื่อ-นามสกุล
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        วันที่
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        ข้อเสนอแนะ
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <h6 class="mb-0 text-sm leading-normal dark:text-slate-400">
                                            อาจารย์ ดร.ธนะวัชร จริยะภูมิ
                                        </h6>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">23/04/18</span>
                                    </td>
                                    <td
                                        class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            ยังไม่แก้ที่ให้แก้ เช่น ศัพท์เฉพาะยังไม่เป็นไปตามที่ให้แก้ไข
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        @include('components.teacher.drawer-bottom')
    </div>
@endsection
