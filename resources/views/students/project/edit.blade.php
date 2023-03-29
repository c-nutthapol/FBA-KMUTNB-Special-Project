@extends('layouts.app')

@section('title', 'แก้ไขโครงงาน')

@section('content')
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="inline-block">
                <a href="{{ route('student.project.home') }}"
                    class="flex flex-row items-center gap-2 text-base text-white  dark:opacity-80 font-semibold dark:hover:opacity-100 fade-opacity">
                    <i class="bi bi-arrow-left text-xl"></i>
                    <span class="inline-block">
                        กลับ
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            {{-- แก้ไขโครงงาน --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-yellow-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-pencil-square leading-0 dark:text-yellow-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        แก้ไขโครงงาน
                    </h5>
                </div>
                <div class="flex-auto flex-wrap p-6">
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">ชื่อโครงงาน
                                    (ภาษาไทย)</label>
                                <input type="text" class="input" placeholder="กรุณากรอกชื่อโครงงานภาษาไทย" />
                            </div>
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">ชื่อโครงงาน
                                    (ภาษาอังกฤษ)</label>
                                <input type="text" class="input" placeholder="กรุณากรอกชื่อโครงงานภาษาอังกฤษ" />
                            </div>
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-white dark:opacity-80">ผู้จัดทำโครงงาน</h6>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
                                    ชื่อนักศึกษาคนที่ 1
                                </label>
                                <input type="text" class="input" placeholder="กรุณากรอกชื่อนักศึกษาคนที่ 1" />
                            </div>
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
                                    รหัสนักศึกษาคนที่ 1
                                </label>
                                <input type="number" class="input" placeholder="กรุณากรอกรหัสนักศึกษาคนที่ 1" />
                            </div>

                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
                                    ชื่อนักศึกษาคนที่ 2
                                </label>
                                <input type="text" class="input" placeholder="กรุณากรอกชื่อนักศึกษาคนที่ 2" />
                            </div>
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
                                    รหัสนักศึกษาคนที่ 2
                                </label>
                                <input type="number" class="input" placeholder="กรุณากรอกรหัสนักศึกษาคนที่ 2" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
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

                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
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
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-white dark:opacity-80">อาจารย์ที่ปรึกษาโครงงาน</h6>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
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
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
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
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
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
                                class="btn text-sm  text-white from-slate-600 to-slate-300">
                                <div class="flex flex-row items-center gap-3">
                                    <i class="bi bi-x-lg leading-0 text-base"></i>
                                    <span class="block">ยกเลิก</span>
                                </div>
                            </a>
                            <button type="submit" class="btn text-sm  text-white from-orange-500 to-yellow-500">
                                <div class="flex flex-row items-center gap-3">
                                    <i class="bi bi-pencil-square leading-0 text-base"></i>
                                    <span class="block">แก้ไข</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
