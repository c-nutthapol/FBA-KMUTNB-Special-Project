@extends('layouts.app')

@section('title', 'ข้อมูลการเข้าใช้งานของผู้ดูแลระบบ')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-person-badge-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ข้อมูลการเข้าใช้งานของผู้ดูแลระบบ
                    </h5>
                </div>

                <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                    <div>
                        <select class="select">
                            <option value="เวลาเข้าใช้งานล่าสุด" selected>
                                เวลาเข้าใช้งานล่าสุด
                            </option>
                            <option value="เวลาเข้าใช้งานเก่าสุด">
                                เวลาเข้าใช้งานเก่าสุด
                            </option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row">
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
                                        เวลาเข้า
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        เวลาออก
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
                                        <span
                                            class="inline-block ml-2 text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-clock-fill"></i> 14:23 น.
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-calendar2-week-fill"></i> 23/04/18
                                        </span>
                                        <span
                                            class="inline-block ml-2 text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-clock-fill"></i> 16:23 น.
                                        </span>
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
@endsection
