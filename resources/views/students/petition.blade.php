@extends('layouts.app')

@section('title', 'เขียนคำร้องทั่วไป')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-brush-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        เขียนคำร้องทั่วไป
                    </h5>
                </div>
                <div class="flex-auto flex-wrap p-6">
                    <form>
                        <div class="mb-4">
                            <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
                                คำร้อง
                            </label>
                            <select class="select">
                                <option value="" selected disabled>
                                    กรุณาเลือกคำร้อง
                                </option>
                                <option value="ขอเปลี่ยนชื่อโครงงานพิเศษ">
                                    ขอเปลี่ยนชื่อโครงงานพิเศษ
                                </option>
                                <option value="ขอเปลี่ยนอาจารย์ที่ปรึกษาร่วม">
                                    ขอเปลี่ยนอาจารย์ที่ปรึกษาร่วม
                                </option>
                                <option value="ขอเปลี่ยนประธานสอบ">
                                    ขอเปลี่ยนประธานสอบ
                                </option>
                                <option value="ขอแก้ไขข้อมูลนักศึกษา">
                                    ขอแก้ไขข้อมูลนักศึกษา
                                </option>
                                <option value="ขอสอบก้าวหน้าโครงงานพิเศษล่าช้า">
                                    ขอสอบก้าวหน้าโครงงานพิเศษล่าช้า
                                </option>
                                <option value="ขอสอบป้องกันโครงงานพิเศษล่าช้า">
                                    ขอสอบป้องกันโครงงานพิเศษล่าช้า
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="text-sm tracking-wide dark:text-white  dark:opacity-80 mb-2">
                                หมายเหตุ
                            </label>
                            <textarea class="input h-auto" placeholder="กรุณากรอกหมายเหตุ" rows="6"></textarea>
                        </div>

                        <div class="mt-10 text-end">
                            <button type="submit" class="btn text-sm  text-white from-blue-500 to-violet-500">
                                <div class="flex flex-row items-center gap-3">
                                    <i class="bi bi-send-fill leading-0 text-base"></i>
                                    <span class="block">ส่งคำร้อง</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
