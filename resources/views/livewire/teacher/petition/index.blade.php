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
                    อนุมัติคำร้องทั่วไป
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                <div>
                    <select class="select">
                        <option value="วันที่เขียนคำร้องล่าสุด" selected>
                            วันที่เขียนคำร้องล่าสุด
                        </option>
                        <option value="วันที่เขียนคำร้องเก่าสุด">
                            วันที่เขียนคำร้องเก่าสุด
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <select class="select">
                            <option value="สถานะทั้งหมด" selected>
                                สถานะทั้งหมด
                            </option>
                            <option value="รออนุมัติ">
                                รออนุมัติ
                            </option>
                            <option value="อนุมัติ">
                                อนุมัติ
                            </option>
                            <option value="ไม่อนุมัติ">
                                ไม่อนุมัติ
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
                                    ชื่อโครงงาน
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    คำร้อง
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    วันที่เขียนคำร้อง
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    กรุณาอนุมัติก่อนวันที่
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    สถานะของที่ปรึกษา
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    สถานะของผู้ดูแลระบบ
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
                                    <span class="text-sm font-bold dark:text-slate-400">ขอเปลี่ยนชื่อโครงงานพิเศษ</span>
                                </td>
                                <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <span
                                        class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                        <i class="bi bi-calendar2-week-fill"></i> 23/04/2566
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
                                        <i class="bi bi-calendar2-week-fill"></i> 30/04/2566
                                    </span>
                                </td>
                                <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-500 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                        รออนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-blue-500 to-violet-400 align-baseline font-bold uppercase leading-none text-white">
                                        อนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-rose-400 align-baseline font-bold uppercase leading-none text-white">
                                        ไม่อนุมัติ
                                    </span>
                                </td>
                                <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-500 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                        รออนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-blue-500 to-violet-400 align-baseline font-bold uppercase leading-none text-white">
                                        อนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-rose-400 align-baseline font-bold uppercase leading-none text-white">
                                        ไม่อนุมัติ
                                    </span>
                                </td>
                                <td
                                    class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <button type="button" data-modal-target="noteModal" data-modal-toggle="noteModal"
                                        class="inline-block mr-2 text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                        <div class="flex flex-row items-center gap-2">
                                            <i class="bi bi-brush leading-0"></i>
                                            <span class="block">จัดการคำร้อง</span>
                                        </div>
                                    </button>
                                    <a href="{{ route('admin.project.details') }}" target="_blank"
                                        class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                        <div class="flex flex-row items-center gap-2">
                                            <i class="bi bi-eye leading-0"></i>
                                            <span class="block">ดูโครงงาน</span>
                                        </div>
                                    </a>
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

<!-- Note Modal -->
<div id="noteModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                    <i class="bi bi-brush leading-0"></i> จัดการคำร้อง
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="noteModal">
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
                <div class="mb-3">
                    <label class="mb-4 text-sm tracking-wide dark:text-white dark:opacity-80">
                        สถานะ
                    </label>
                    <div class="flex items-center mb-4">
                        <input id="status-1" type="radio" value="" name="status" class="w-4 h-4 input-radio" required>
                        <label for="status-1"
                            class="ml-2 text-sm tracking-wide cursor-pointer dark:text-white dark:opacity-800">
                            อนุมัติ
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input id="status-2" type="radio" value="" name="status" class="w-4 h-4 input-radio" required>
                        <label for="status-2"
                            class="ml-2 text-sm tracking-wide cursor-pointer dark:text-white dark:opacity-800">
                            ไม่อนุมัติ
                        </label>
                    </div>
                </div>
                <div>
                    <label for="note"
                        class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">หมายเหตุ</label>
                    <textarea class="input" placeholder="กรุณากรอกหมายเหตุ" rows="2"></textarea>
                </div>
            </div>
            <!-- Modal footer -->
            <div
                class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="noteModal" type="button"
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
