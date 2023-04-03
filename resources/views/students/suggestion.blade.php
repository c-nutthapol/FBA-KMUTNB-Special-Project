@extends('layouts.app')

@section('title', 'ข้อเสนอแนะ')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

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
                                        ชื่อผู้เสนอแนะ
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        วันที่
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
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
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <button type="button" data-modal-target="viewModal" data-modal-toggle="viewModal"
                                            class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-800">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-eye leading-0"></i>
                                                <span class="block">ดูข้อเสนอแนะ</span>
                                            </div>
                                        </button>
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
    <div id="viewModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-6xl md:h-auto">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                        <i class="bi bi-eye leading-0"></i> ดูข้อเสนอแนะ
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="viewModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">ปิด</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div
                        class="flex flex-col p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                        <div class="flex flex-row space-x-1">
                            <i class="bi bi-badge-ad-fill"></i>
                            <span class="block font-bold tracking-wide">หัวข้อที่ผิดบ่อย</span>
                        </div>
                        <div>
                            <ul class="mt-1.5 ml-1 list-disc list-inside">
                                <li>
                                    ชื่อเรื่อง ประเด็นปัญหา วัตถุประสงค์ ประโยชน์ ประชากรและกลุ่มตัวอย่าง ต้องสอดคล้องกัน
                                </li>
                                <li>
                                    ตรวจสอบสถิติที่ใช้ในบทที่ 3 กับสถิติที่วิเคราะห์ในบทที่ 4 ถูกต้อง/เป็นไปตามที่คณะฯกำหนด
                                </li>
                                <li>
                                    ตรวจสอบปรับแก้เลขสถิติ และการแปลผลการวิจัย
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="flex flex-col p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                        <div class="flex flex-row space-x-1">
                            <i class="bi bi-badge-ad-fill"></i>
                            <span class="block font-bold tracking-wide">การจัดรูปแบบการพิมพ์ที่ผิดบ่อย</span>
                        </div>
                        <div>
                            <ul class="mt-1.5 ml-1 list-disc list-inside">
                                <li>
                                    อักษรใช้ TH Sarabun PSK ขนาด 16 ธรรมดาตลอดทั้งเล่ม ยกเว้น หัวข้อใช้อักษรขนาด 16 หนา
                                    โดยหัวข้อ บทคัดย่อ กิตติกรรมประกาศ สารบัญ สารบัญตาราง สารบัญภาพ ให้ใช้ขนาดอักษร 16 หนา
                                    ยกเว้น บทที่ ชื่อบท บรรณานุกรม ใช้ขนาดอักษร 20 หนา
                                </li>
                                <li>
                                    หัวข้อหลักในเนื้อหาบทที่ 1-5 ต้องจัดชิดซ้าย ขนาดอักษร 16 หนา
                                </li>
                                <li>
                                    บรรณานุกรมจัดรูปแบบตาม APA แบบขีดเส้นใต้
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label class="mb-2 text-sm font-bold tracking-wide dark:text-white dark:opacity-80">
                            ข้อเสนอแนะอื่น ๆ
                        </label>
                        <p class="mb-0 text-sm leading-relaxed tracking-wide dark:text-gray-300">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore a, repellat sint iusto aliquam
                            sequi ratione doloremque consectetur, pariatur libero incidunt quaerat quos voluptate. Deleniti
                            officiis earum rerum omnis incidunt!
                        </p>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="viewModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        ปิด
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
