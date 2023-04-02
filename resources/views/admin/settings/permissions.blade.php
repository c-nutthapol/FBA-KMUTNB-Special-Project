@extends('layouts.app')

@section('title', 'กำหนดสิทธิ์ผู้ใช้งาน')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-person-fill-gear leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        กำหนดสิทธิ์ผู้ใช้งาน
                    </h5>
                </div>

                <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                    <div>
                        <select class="select">
                            <option value="เริ่มใช้งานวันที่ล่าสุด" selected>
                                เริ่มใช้งานวันที่ล่าสุด
                            </option>
                            <option value="เริ่มใช้งานวันที่เก่าสุด">
                                เริ่มใช้งานวันที่เก่าสุด
                            </option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row">
                        <div class="flex-1">
                            <select class="select">
                                <option value="สิทธิ์ผู้ใช้งานทั้งหมด" selected>
                                    สิทธิ์ผู้ใช้งานทั้งหมด
                                </option>
                                <option value="นักศึกษา">
                                    นักศึกษา
                                </option>
                                <option value="อาจารย์">
                                    อาจารย์
                                </option>
                                <option value="ผู้ดูแลระบบ">
                                    ผู้ดูแลระบบ
                                </option>
                            </select>
                        </div>
                        <div class="flex-1">
                            <select class="select">
                                <option value="สถานะทั้งหมด" selected>
                                    สถานะทั้งหมด
                                </option>
                                <option value="ใช้งานปกติ">
                                    ใช้งานปกติ
                                </option>
                                <option value="ระงับการใช้งาน">
                                    ระงับการใช้งาน
                                </option>
                            </select>
                        </div>
                        <div class="flex-1">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="text-lg text-gray-500 bi bi-search dark:text-gray-400 leading-0"></i>
                                </div>
                                <input type="text" id="search" class="pl-10 input" placeholder="ค้นหา">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-wrap flex-auto p-6">
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
                                        เริ่มใช้งานวันที่
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        สิทธิ์ผู้ใช้งาน
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
                                            <img src="https://images.pexels.com/photos/1436962/pexels-photo-1436962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                class="object-cover object-center w-10 h-10 rounded-full" alt="Avatar">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-slate-400">
                                                นายชื่อ นามสกุล
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-calendar2-week-fill"></i> 23/04/18
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="inline-block">
                                            <select class="select">
                                                <option value="นักศึกษา">
                                                    นักศึกษา
                                                </option>
                                                <option value="อาจารย์">
                                                    อาจารย์
                                                </option>
                                                <option value="ผู้ดูแลระบบ">
                                                    ผู้ดูแลระบบ
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="inline-block">
                                            <select class="select">
                                                <option value="ใช้งานปกติ">
                                                    ใช้งานปกติ
                                                </option>
                                                <option value="ระงับการใช้งาน">
                                                    ระงับการใช้งาน
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <button type="button" data-modal-target="viewModal" data-modal-toggle="viewModal"
                                            class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-eye leading-0"></i>
                                                <span class="block">ดูรายละเอียด</span>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-end mt-4">
                        <nav aria-label="Page navigation">
                            <ul class="inline-flex items-center -space-x-px">
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center w-8 h-8 ml-0 text-sm leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Previous</span>
                                        <i class="bi bi-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                        class="z-10 flex items-center justify-center w-8 h-8 text-sm leading-tight text-white bg-blue-500 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center w-8 h-8 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center w-8 h-8 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center w-8 h-8 text-sm leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only">Next</span>
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div id="viewModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-xl md:h-auto">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="flex flex-col items-center gap-3">
                        <img src="https://images.pexels.com/photos/1436962/pexels-photo-1436962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            class="object-cover object-center rounded-2 w-28 h-28" alt="Avatar">
                        <h6 class="mb-0 text-lg leading-normal dark:text-slate-400">
                            นายชื่อ นามสกุล
                        </h6>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="col-span-2 text-base tracking-wide dark:text-slate-400">
                            <strong>รหัสประจำตัว:</strong>
                            <span class="inline-block ml-1">
                                5402041520035
                            </span>
                        </div>
                        <div class="text-base tracking-wide dark:text-slate-400">
                            <strong>ห้อง:</strong>
                            <span class="inline-block ml-1">
                                RB
                            </span>
                        </div>
                        <div class="text-base tracking-wide dark:text-slate-400">
                            <strong>สาขาวิชา:</strong>
                            <span class="inline-block ml-1">
                                คอมพิวเตอร์ธุรกิจ
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="viewModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        ปิด
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
