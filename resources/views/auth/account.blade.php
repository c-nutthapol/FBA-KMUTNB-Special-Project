@extends('layouts.app')

@section('title', 'บัญชีผู้ใช้')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div
                        class="flex items-center h-full p-3.5 rounded-3 bg-gradient-to-tl from-blue-500 to-violet-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-person-fill leading-0 dark:text-white"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        บัญชีผู้ใช้
                    </h5>
                </div>
                <div class="flex-wrap flex-auto p-6">
                    {{-- If there is an error, enter the Error class. = label class='... error', input and select class="... error"  --}}
                    <form>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2 text-center">
                                <div class="inline-block">
                                    {{-- มีรูป --}}
                                    {{-- <div class="mb-2">
                                    <img src="https://images.pexels.com/photos/1436962/pexels-photo-1436962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="object-cover object-center mx-auto rounded-2 w-28 h-28" alt="Avatar">
                                </div> --}}
                                    {{-- ไม่มีรูป --}}
                                    <div
                                        class="flex items-center justify-center mx-auto mb-2 bg-gray-300 w-28 h-28 rounded-2">
                                        <i class="bi bi-image-alt leading-0"></i>
                                    </div>
                                    <input class="h-full p-0 input" type="file">
                                    {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาอัพโหลดรูปภาพ</span> --}}
                                </div>
                            </div>
                            <div class="col-span-2">
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    รหัสประจำตัว
                                </label>
                                <input type="number" class="input" placeholder="กรุณากรอกรหัสประจำตัว" />
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกรหัสประจำตัว</span> --}}
                            </div>
                            <div class="col-span-2">
                                <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    อีเมล
                                </label>
                                <input type="email" class="input" placeholder="กรุณากรอกอีเมล" />
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกอีเมล</span> --}}
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    ชื่อ
                                </label>
                                <input type="text" class="input" placeholder="กรุณากรอกชื่อ" />
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกชื่อ</span> --}}
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    นามสกุล
                                </label>
                                <input type="text" class="input" placeholder="กรุณากรอกนามสกุล" />
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกนามสกุล</span> --}}
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-white dark:opacity-80">
                                    ห้อง
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
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกห้อง</span> --}}
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-white dark:opacity-80">
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
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกสาขาวิชา</span> --}}
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
