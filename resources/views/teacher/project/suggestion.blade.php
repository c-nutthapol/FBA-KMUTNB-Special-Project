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
                </div>
            </div>

            {{-- ข้อเสนอแนะ --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex flex-col items-start justify-start gap-4 p-6 mb-0 border-b-0 sm:items-center sm:justify-between sm:flex-row border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-row items-center space-x-4">
                        <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                            <i class="text-2xl text-white bi bi-chat-dots-fill leading-0 dark:text-blue-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            ข้อเสนอแนะ
                        </h5>
                    </div>
                    <button type="button" class="w-full text-sm text-white sm:w-auto btn from-blue-500 to-violet-500"
                        data-modal-target="createdModal" data-modal-toggle="createdModal">
                        <div class="flex flex-row items-center justify-center gap-3">
                            <i class="bi bi-plus-lg leading-0"></i>
                            <span class="block">เพิ่มข้อเสนอแนะ</span>
                        </div>
                    </button>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 tracking-wide align-top border-gray-200 dark:border-slate-600 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        ชื่อผู้เสนอแนะ
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        วันที่
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        ตัวเลือก
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
                                        <div class="flex flex-row items-center justify-end space-x-3">
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
                </div>
            </div>

        </div>
    </div>

    <!-- Created Modal -->
    <div id="createdModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-6xl md:h-auto">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                        <i class="bi bi-plus-lg leading-0"></i> เพิ่มข้อเสนอแนะ
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="createdModal">
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
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2">
                        <div class="flex flex-col space-y-3">
                            <h4
                                class="mb-0 text-base font-bold tracking-wide text-gray-800 dark:text-white dark:opacity-60">
                                หัวข้อที่ผิดบ่อย</h4>
                            <div class="flex items-start">
                                <input id="default-checkbox" type="checkbox" value="" class="mt-1 input-checkbox">
                                <label for="default-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ชื่อเรื่อง ประเด็นปัญหา วัตถุประสงค์ ประโยชน์ ประชากรและกลุ่มตัวอย่าง ต้องสอดคล้องกัน
                                </label>
                            </div>
                            <div class="flex items-start">
                                <input checked id="checked-checkbox" type="checkbox" value=""
                                    class="mt-1 input-checkbox">
                                <label for="checked-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ตรวจสอบสถิติที่ใช้ในบทที่ 3 กับสถิติที่วิเคราะห์ในบทที่ 4 ถูกต้อง/เป็นไปตามที่คณะฯกำหนด
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <h4
                                class="mb-0 text-base font-bold tracking-wide text-gray-800 dark:text-white dark:opacity-60">
                                การจัดรูปแบบการพิมพ์ที่ผิดบ่อย
                            </h4>
                            <div class="flex items-start">
                                <input id="default-checkbox" type="checkbox" value="" class="mt-1 input-checkbox">
                                <label for="default-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ชื่อเรื่อง ประเด็นปัญหา วัตถุประสงค์ ประโยชน์ ประชากรและกลุ่มตัวอย่าง ต้องสอดคล้องกัน
                                </label>
                            </div>
                            <div class="flex items-start">
                                <input checked id="checked-checkbox" type="checkbox" value=""
                                    class="mt-1 input-checkbox">
                                <label for="checked-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ตรวจสอบสถิติที่ใช้ในบทที่ 3 กับสถิติที่วิเคราะห์ในบทที่ 4 ถูกต้อง/เป็นไปตามที่คณะฯกำหนด
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            ข้อเสนอแนะอื่น ๆ
                        </label>
                        <textarea class="h-auto input" placeholder="ข้อเสนอแนะอื่น ๆ" rows="3"></textarea>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="createdModal" type="button"
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
        <div class="relative w-full h-full max-w-6xl md:h-auto">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
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
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2">
                        <div class="flex flex-col space-y-3">
                            <h4
                                class="mb-0 text-base font-bold tracking-wide text-gray-800 dark:text-white dark:opacity-60">
                                หัวข้อที่ผิดบ่อย</h4>
                            <div class="flex items-start">
                                <input id="default-checkbox" type="checkbox" value="" class="mt-1 input-checkbox">
                                <label for="default-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ชื่อเรื่อง ประเด็นปัญหา วัตถุประสงค์ ประโยชน์ ประชากรและกลุ่มตัวอย่าง ต้องสอดคล้องกัน
                                </label>
                            </div>
                            <div class="flex items-start">
                                <input checked id="checked-checkbox" type="checkbox" value=""
                                    class="mt-1 input-checkbox">
                                <label for="checked-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ตรวจสอบสถิติที่ใช้ในบทที่ 3 กับสถิติที่วิเคราะห์ในบทที่ 4 ถูกต้อง/เป็นไปตามที่คณะฯกำหนด
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <h4
                                class="mb-0 text-base font-bold tracking-wide text-gray-800 dark:text-white dark:opacity-60">
                                การจัดรูปแบบการพิมพ์ที่ผิดบ่อย
                            </h4>
                            <div class="flex items-start">
                                <input id="default-checkbox" type="checkbox" value="" class="mt-1 input-checkbox">
                                <label for="default-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ชื่อเรื่อง ประเด็นปัญหา วัตถุประสงค์ ประโยชน์ ประชากรและกลุ่มตัวอย่าง ต้องสอดคล้องกัน
                                </label>
                            </div>
                            <div class="flex items-start">
                                <input checked id="checked-checkbox" type="checkbox" value=""
                                    class="mt-1 input-checkbox">
                                <label for="checked-checkbox"
                                    class="ml-2 text-base font-medium text-gray-900 dark:text-gray-300">
                                    ตรวจสอบสถิติที่ใช้ในบทที่ 3 กับสถิติที่วิเคราะห์ในบทที่ 4 ถูกต้อง/เป็นไปตามที่คณะฯกำหนด
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            ข้อเสนอแนะอื่น ๆ
                        </label>
                        <textarea class="h-auto input" placeholder="ข้อเสนอแนะอื่น ๆ" rows="3"></textarea>
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
