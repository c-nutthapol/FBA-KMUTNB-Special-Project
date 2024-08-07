@extends('layouts.app')

@section('title', 'ภาคเรียน')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex flex-col items-start justify-start gap-4 p-6 mb-0 border-b-0 sm:items-center sm:justify-between sm:flex-row border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-row items-center space-x-4">
                        <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                            <i class="text-2xl text-white bi bi-calendar-week-fill leading-0 dark:text-blue-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-slate-300">
                            ภาคเรียน
                        </h5>
                    </div>
                    <button type="button" class="w-full text-sm text-white sm:w-auto btn from-blue-500 to-violet-500"
                        data-modal-target="createModal" data-modal-toggle="createModal">
                        <div class="flex flex-row items-center justify-center gap-3">
                            <i class="bi bi-plus-lg leading-0"></i>
                            <span class="block">เพิ่มภาคเรียน</span>
                        </div>
                    </button>
                </div>

                <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-end sm:flex-row">
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
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        ภาคเรียน
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        ปีการศึกษา
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        วันที่เริ่มภาคเรียน
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        วันที่จบภาคเรียน
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        รายละเอียด
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="px-6 py-3 text-left align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                            1
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                            2566
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                            <i class="bi bi-calendar2-week-fill"></i> 1/01/2566
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                            <i class="bi bi-calendar2-week-fill"></i> 31/03/2566
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row justify-end gap-3">
                                            <button type="button" data-modal-target="editModal"
                                                data-modal-toggle="editModal"
                                                class="inline-block text-sm font-bold leading-normal text-center text-yellow-300 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-500">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-pencil-square leading-0"></i>
                                                    <span class="block">แก้ไข</span>
                                                </div>
                                            </button>
                                            <button type="button"
                                                class="inline-block text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in rounded-lg cursor-pointer text-rose-500 hover:text-rose-800">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-trash3 leading-0"></i>
                                                    <span class="block">ลบ</span>
                                                </div>
                                            </button>
                                        </div>
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
                                        class="z-10 flex items-center justify-center w-8 h-8 text-sm leading-tight text-white bg-blue-500 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-slate-300">
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

    <!-- Create Modal -->
    <div id="createModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-slate-300">
                        <i class="bi bi-plus-lg leading-0"></i> เพิ่มภาคเรียน
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="createModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">ยกเลิก</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                ภาคเรียน
                            </label>
                            <div class="flex flex-row gap-4">
                                <div class="flex items-center">
                                    <input id="term-1" type="radio" value="" name="term"
                                        class="w-4 h-4 input-radio" checked required>
                                    <label for="term-1"
                                        class="ml-2 text-sm tracking-wide cursor-pointer dark:text-slate-300 dark:opacity-800">
                                        1
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="term-2" type="radio" value="" name="term"
                                        class="w-4 h-4 input-radio" required>
                                    <label for="term-2"
                                        class="ml-2 text-sm tracking-wide cursor-pointer dark:text-slate-300 dark:opacity-800">
                                        2
                                    </label>
                                </div>
                            </div>
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกภาคเรียน</span> --}}
                        </div>
                        <div class="col-span-2">
                            <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                ปีการศึกษา
                            </label>
                            <input type="number" class="input" placeholder="กรุณากรอกปีการศึกษา" />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกปีการศึกษา</span> --}}
                        </div>
                        <div>
                            <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                วันที่เริ่มภาคเรียน
                            </label>
                            <input type="text" id="startDatePicker" class="input" />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกวันที่เริ่มภาคเรียน</span> --}}
                        </div>
                        <div>
                            <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                วันที่จบภาคเรียน
                            </label>
                            <input type="text" id="endDatePicker" class="input" />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกวันที่จบภาคเรียน</span> --}}
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="createModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        ยกเลิก
                    </button>
                    <button type="submit" class="text-sm font-medium text-white btn from-blue-500 to-violet-500">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-save-fill leading-0"></i>
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


    <!-- Edit Modal -->
    <div id="editModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-slate-300">
                        <i class="bi bi-pencil-square leading-0"></i> แก้ไขข้อเสนอแนะ
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="editModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">ยกเลิก</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                ภาคเรียน
                            </label>
                            <div class="flex flex-row gap-4">
                                <div class="flex items-center">
                                    <input id="term-1" type="radio" value="" name="term"
                                        class="w-4 h-4 input-radio" checked required>
                                    <label for="term-1"
                                        class="ml-2 text-sm tracking-wide cursor-pointer dark:text-slate-300 dark:opacity-800">
                                        1
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="term-2" type="radio" value="" name="term"
                                        class="w-4 h-4 input-radio" required>
                                    <label for="term-2"
                                        class="ml-2 text-sm tracking-wide cursor-pointer dark:text-slate-300 dark:opacity-800">
                                        2
                                    </label>
                                </div>
                            </div>
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกภาคเรียน</span> --}}
                        </div>
                        <div class="col-span-2">
                            <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                ปีการศึกษา
                            </label>
                            <input type="number" class="input" placeholder="กรุณากรอกปีการศึกษา" />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกปีการศึกษา</span> --}}
                        </div>
                        <div>
                            <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                วันที่เริ่มภาคเรียน
                            </label>
                            <input type="date" class="input" />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกวันที่เริ่มภาคเรียน</span> --}}
                        </div>
                        <div>
                            <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                วันที่จบภาคเรียน
                            </label>
                            <input type="date" class="input" />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกวันที่จบภาคเรียน</span> --}}
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="editModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        ยกเลิก
                    </button>
                    <button type="submit" class="text-sm font-medium text-white btn from-orange-400 to-yellow-400">
                        <div class="flex flex-row items-center gap-3">
                            <i class="text-base bi bi-pencil-square leading-0"></i>
                            <span class="block">แก้ไข</span>
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
@endsection
@section('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr@4.6.13/dist/l10n/th.js"></script>
    <script>
        flatpickr("#startDatePicker", {
            dateFormat: "d/m/Y",
            locale: "th",
        });
        flatpickr("#endDatePicker", {
            dateFormat: "d/m/Y",
            locale: "th",
        });
    </script>
@endsection
