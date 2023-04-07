@extends('layouts.app')

@section('title', 'แก้ไขกำหนดสิทธิ์')

@section('content')

    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="inline-block">
                <a href="{{ route('admin.settings.permissions.index') }}"
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
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-brush-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        แก้ไขกำหนดสิทธิ์
                    </h5>
                </div>
                <div class="flex-wrap flex-auto p-6">
                    <form>
                        <div class="mb-4">
                            {{-- If there is an error, enter the Error class. = label class='... error', select class="... error"  --}}
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                สิทธิ์ผู้ใช้งาน
                            </label>
                            <input type="text" class="input" placeholder="กรุณากรอกสิทธิ์ผู้ใช้งาน" />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกสิทธิ์ผู้ใช้งาน</span> --}}
                        </div>
                        <div class="mb-4">
                            {{-- If there is an error, enter the Error class. = label class='... error', select class="... error"  --}}
                            <label class="block mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                สถานะ
                            </label>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm tracking-wide dark:text-white dark:opacity-80">ใช้งานปกติ</span>
                            </label>
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากำหนดสถานะ</span> --}}
                        </div>
                        <div>
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center w-full mb-0 tracking-wide align-top border-gray-200 dark:border-slate-600 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ลำดับ
                                            </th>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                หนัา
                                            </th>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                อ่าน
                                            </th>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                แก้ไข
                                            </th>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                ลบ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td
                                                class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="inline-block ml-2 text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                    1
                                                </span>
                                            </td>
                                            <td
                                                class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                    หน้าหลัก
                                                </span>
                                            </td>
                                            <td
                                                class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center mb-2">
                                                    <input type="checkbox" class="w-4 h-4 input-checkbox">
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center mb-2">
                                                    <input type="checkbox" class="w-4 h-4 input-checkbox">
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center mb-2">
                                                    <input type="checkbox" class="w-4 h-4 input-checkbox">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="mt-10 text-end">
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
        </div>
    </div>
@endsection
