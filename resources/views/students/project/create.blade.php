@extends('layouts.app')

@section('title', 'แก้ไขโครงงาน')

@section('content')

    <div class="flex flex-wrap mb-8 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <ol
                class="flex items-center w-full px-6 py-4 space-x-2 text-sm font-medium text-gray-500 bg-white border border-gray-200 shadow-xl sm:space-x-4 rounded-2xl dark:text-gray-400 sm:text-base dark:bg-slate-850 dark:shadow-dark-xl dark:border-slate-850">
                <li>
                    <a href="#" class="flex items-center text-teal-400 dark:text-teal-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-teal-400 border border-teal-400 rounded-full shrink-0 dark:border-teal-400">
                            1
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                ลงทะเบียนโครงงานพิเศษ
                            </span>
                            <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span>
                            {{-- <span
                            class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                            ปรับแก้ไข
                        </span> --}}
                        </div>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-400 dark:text-gray-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-gray-400 border border-gray-400 rounded-full shrink-0 dark:border-gray-400">
                            2
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                สอบความก้าวหน้า
                            </span>
                            <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                                ปรับแก้ไข
                            </span>
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span> --}}
                        </div>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-400 dark:text-gray-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-gray-400 border border-gray-400 rounded-full shrink-0 dark:border-gray-400">
                            3
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                สอบป้องกัน
                            </span>
                            {{-- <span
                            class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                            ปรับแก้ไข
                        </span> --}}
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span> --}}
                        </div>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-400 dark:text-gray-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-gray-400 border border-gray-400 rounded-full shrink-0 dark:border-gray-400">
                            4
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                ส่งเล่ม
                            </span>
                            {{-- <span
                            class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                            ปรับแก้ไข
                        </span> --}}
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span> --}}
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            {{-- ลงทะเบียนโครงงานพิเศษ --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-journal-plus leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ลงทะเบียนโครงงานพิเศษ
                    </h5>
                </div>
                <div class="flex-wrap flex-auto p-6">
                    {{-- If there is an error, enter the Error class. = label class='... error', input and select class="... error"  --}}
                    <form>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">ชื่อโครงงาน
                                    (ภาษาไทย)</label>
                                <input type="text" class="input" placeholder="กรุณากรอกชื่อโครงงานภาษาไทย" />
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกชื่อโครงงานภาษาไทย</span> --}}
                            </div>
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">ชื่อโครงงาน
                                    (ภาษาอังกฤษ)</label>
                                <input type="text" class="input" placeholder="กรุณากรอกชื่อโครงงานภาษาอังกฤษ" />
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกชื่อโครงงานภาษาอังกฤษ</span> --}}
                            </div>
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-white dark:opacity-80">ผู้จัดทำโครงงาน</h6>
                        <div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 ">
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    สาขาวิชา
                                </label>
                                <select class="select">
                                    <option value="" selected disabled>
                                        กรุณาเลือกสาขาวิชา
                                    </option>
                                    <option value="การบัญชี">
                                        การบัญชี
                                    </option>
                                    <option value="บริหารธุรกิจอุตสาหกรรมและโลจิสติกส์">
                                        บริหารธุรกิจอุตสาหกรรมและโลจิสติกส์
                                    </option>
                                    <option value="คอมพิวเตอร์ธุรกิจ">
                                        คอมพิวเตอร์ธุรกิจ
                                    </option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    ห้อง ตัวอย่างเช่น RA RB
                                </label>
                                <select class="select">
                                    <option value="" selected disabled>
                                        กรุณาเลือกห้อง
                                    </option>
                                    <option value="RA">
                                        RA
                                    </option>
                                    <option value="">
                                        RB
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    เลือกสมาชิก
                                </label>
                                <select class="select">
                                    <option value="" selected disabled>
                                        กรุณาเลือกสมาชิก
                                    </option>
                                    <option value="RA">
                                        RA
                                    </option>
                                    <option value="">
                                        RB
                                    </option>
                                </select>
                            </div>

                            {{-- <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    ชื่อนักศึกษาคนที่ 2
                                </label>
                                <select class="select">
                                    <option value="" selected disabled>
                                        กรุณาเลือกนักศึกษาคนที่ 2
                                    </option>
                                    <option value="RA">
                                        RA
                                    </option>
                                    <option value="">
                                        RB
                                    </option>
                                </select>
                            </div> --}}
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-white dark:opacity-80">อาจารย์ที่ปรึกษาโครงงาน</h6>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    ที่ปรึกษาหลัก
                                </label>
                                <select class="select">
                                    <option value="" selected disabled>
                                        กรุณาเลือกที่ปรึกษาหลัก
                                    </option>
                                    <option value="อาจารย์ทดสอบ ระบบ">
                                        อาจารย์ทดสอบ ระบบ
                                    </option>
                                </select>
                            </div>

                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    ที่ปรึกษาร่วม
                                </label>
                                <select class="select">
                                    <option value="" selected disabled>
                                        กรุณาเลือกที่ปรึกษาร่วม
                                    </option>
                                    <option value="อาจารย์ทดสอบ ระบบ">
                                        อาจารย์ทดสอบ ระบบ
                                    </option>
                                </select>
                            </div>
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-white dark:opacity-80">ประธานสอบ</h6>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    ประธานสอบ
                                </label>
                                <select class="select">
                                    <option value="" selected disabled>
                                        กรุณาเลือกประธานสอบ
                                    </option>
                                    <option value="อาจารย์ทดสอบ ระบบ">
                                        อาจารย์ทดสอบ ระบบ
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-10 text-end">
                            <a href="{{ route('student.project.home') }}"
                                class="text-sm text-white btn from-slate-600 to-slate-300">
                                <div class="flex flex-row items-center gap-3">
                                    <i class="text-base bi bi-x-lg leading-0"></i>
                                    <span class="block">ยกเลิก</span>
                                </div>
                            </a>
                            <button type="submit" class="text-sm text-white btn from-blue-500 to-violet-500">
                                <div class="flex flex-row items-center gap-3">
                                    <i class="text-base bi bi-save-fill leading-0"></i>
                                    <span class="block">บันทึก</span>
                                </div>
                                {{-- loading --}}
                                {{-- <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="#E5E7EB" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentColor" />
                                </svg> --}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
