@extends('layouts.app')

@section('title', 'แก้ไขข่าวสาร')

@section('content')
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="flex flex-col items-start justify-start gap-4 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex flex-row items-center space-x-4">
                        <div class="flex h-full items-center rounded-3 bg-yellow-300 p-3.5 text-white dark:bg-slate-700/40">
                            <i class="text-2xl text-white bi bi-pencil-square leading-0 dark:text-yellow-300"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            แก้ไขข่าวสาร
                        </h5>
                    </div>
                </div>

                <div class="flex-wrap flex-auto p-6">
                    <form class="flex flex-col gap-3">
                        <div class="text-center">
                            <div class="block mx-auto max-w-100">
                                {{-- มีรูป --}}
                                {{-- <div class="mb-2">
                                    <img src="https://images.pexels.com/photos/23547/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="object-cover object-center w-auto mx-auto rounded-2 h-34" alt="Avatar">
                                </div> --}}
                                {{-- ไม่มีรูป --}}
                                <div
                                    class="flex items-center justify-center w-auto mx-auto mb-2 bg-gray-300 h-50 rounded-2">
                                    <i class="text-4xl bi bi-image-alt leading-0"></i>
                                </div>
                                <input class="h-full p-0 input" type="file" />
                                {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาอัพโหลดรูปภาพ</span> --}}
                            </div>
                        </div>
                        <div>
                            {{-- If there is an error, enter the Error class. = label class='... error', select class="... error"  --}}
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                ชื่อข่าวสาร
                            </label>
                            <input type="text" class="input" placeholder="กรุณากรอกข่าวสาร" required />
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกข่าวสาร</span> --}}
                        </div>
                        <div>
                            {{-- If there is an error, enter the Error class. = label class='... error', select class="... error"  --}}
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                ประเภทข่าวสาร
                            </label>
                            <select class="select">
                                <option value="" selected disabled>
                                    กรุณาเลือกประเภทข่าวสาร
                                </option>
                                <option value="ข่าวการศึกษา">
                                    ข่าวการศึกษา
                                </option>
                            </select>
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาเลือกประเภทข่าวสาร</span> --}}
                        </div>
                        <div>
                            {{-- If there is an error, enter the Error class. = label class='... error', textarea class="... error"  --}}
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                รายละเอียดข่าวสาร
                            </label>
                            <textarea class="h-auto input" rows="6" id="editor"></textarea>
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกรายละเอียดข่าวสาร</span> --}}
                        </div>

                        <div>
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                                สถานะข่าวสาร
                            </label>
                            <div class="flex flex-row items-center">
                                <span class="mr-3 text-sm tracking-wide dark:text-white dark:opacity-80">ปิดใช้งาน</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div
                                        class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800">
                                    </div>
                                    <span
                                        class="ml-3 text-sm tracking-wide dark:text-white dark:opacity-80">เปิดใช้งาน</span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-10 text-end">
                            <a href="{{ route('admin.settings.news.home') }}"
                                class="mr-1 inline-block rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                                ยกเลิก
                            </a>
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

@push('script')
    <script src="{{ asset('assets/lib/ckeditor5-build-classic/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/lib/ckeditor5-build-classic/translations/th.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: 'th'
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

