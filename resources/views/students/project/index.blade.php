@section('title', 'โครงงาน')
<div>
    <div class="flex flex-wrap mb-8 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <ol
                class="flex items-center w-full px-6 py-4 space-x-2 text-sm font-medium text-gray-500 bg-white border border-gray-200 shadow-xl rounded-2xl dark:border-slate-850 dark:bg-slate-850 dark:text-gray-400 dark:shadow-dark-xl sm:space-x-4 sm:text-base">
                <li>
                    <a href="#" class="flex items-center text-teal-400 dark:text-teal-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-teal-400 border border-teal-400 rounded-full shrink-0 dark:border-teal-400">
                            <i class="bi bi-check-lg"></i>
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                ลงทะเบียนโครงงานพิเศษ
                            </span>
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span> --}}
                            {{-- <span
                            class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                            ปรับแก้ไข
                        </span> --}}
                        </div>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('student.project.home') }}"
                        class="flex items-center text-gray-400 dark:text-gray-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-gray-400 border border-gray-400 rounded-full shrink-0 dark:border-gray-400">
                            2
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                ลงทะเบียนเพื่อขอสอบหัวข้อ
                            </span>
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span> --}}
                            {{-- <span
                            class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                            ปรับแก้ไข
                        </span> --}}
                        </div>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-teal-400 dark:text-teal-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-teal-400 border border-teal-400 rounded-full shrink-0 dark:border-teal-400">
                            3
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                สอบความก้าวหน้า
                            </span>
                            <span
                                class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-gray-400 to-slate-400 py-1.4 px-2.5 text-center align-baseline text-xxs font-bold uppercase leading-none tracking-wider text-white">
                                ก่อน 10/04/2566
                            </span>
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                                ปรับแก้ไข
                            </span> --}}
                        </div>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-400 dark:text-gray-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-gray-400 border border-gray-400 rounded-full shrink-0 dark:border-gray-400">
                            4
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                สอบป้องกัน
                            </span>
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span> --}}
                            {{-- <span
                            class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                            ปรับแก้ไข
                        </span> --}}
                        </div>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5l7 7-7 7M5 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-400 dark:text-gray-400">
                        <span
                            class="flex items-center justify-center w-10 h-10 mr-3 text-base text-white bg-gray-400 border border-gray-400 rounded-full shrink-0 dark:border-gray-400">
                            5
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                ส่งเล่ม
                            </span>
                            {{-- <span
                                class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-400 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                ก่อน 10/04/2566
                            </span> --}}
                            {{-- <span
                            class="py-1.4 px-2.5 text-xxs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-yellow-400 to-orange-400 align-baseline font-bold uppercase leading-none text-white">
                            ปรับแก้ไข
                        </span> --}}
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            {{-- ชื่อโครงงาน --}}
            <div
                class="relative flex flex-col items-center justify-start min-w-0 gap-3 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl sm:flex-row sm:justify-between">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex h-full items-center rounded-3 bg-teal-400 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="text-2xl text-white bi bi-folder-fill leading-0 dark:text-teal-400"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        <span class="block font-bold">{{ $data['project']['name_th'] ?? '' }}</span>
                        <span
                            class="block font-normal text-slate-600 dark:text-white">{{ $data['project']['name_en'] ?? '' }}</span>
                    </h5>
                </div>
                <div class="pb-6 sm:p-6">
                    <button type="button" class="text-xs text-white btn from-teal-400 to-green-400"
                        data-modal-target="uploadModal" data-modal-toggle="uploadModal">
                        <div class="flex flex-row items-center gap-3">
                            <i class="text-base bi bi-cloud-arrow-up leading-0"></i>
                            <span class="block">แนบเอกสาร</span>
                        </div>
                    </button>
                    {{-- กรณีที่อาจารย์อนุมัติให้มีการแก้ไข --}}
                    <a href="{{ route('student.project.edit') }}"
                        class="text-xs text-white btn from-orange-400 to-yellow-400">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-pencil-square leading-0"></i>
                            <span class="block">แก้ไข</span>
                        </div>
                    </a>
                </div>
            </div>

            {{-- ผู้จัดทำโครงงาน --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="text-2xl text-white bi bi-mortarboard-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ผู้จัดทำโครงงาน
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                            <figure
                                class="relative flex flex-col items-center w-auto p-6 space-y-6 break-words rounded-4 bg-slate-50 dark:bg-slate-900/40 sm:flex-row sm:space-y-0 sm:space-x-6">
                                <div class="flex items-center">
                                    <img src="https://images.pexels.com/photos/325531/pexels-photo-325531.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="avatar"
                                        class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                </div>
                                <figcaption class="space-y-1 text-center sm:text-left">
                                    <div class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data['project']->user_project->where('role', 'student')[0]->user->name ?? '' }}
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">รหัสนักศึกษา</span>:<span class="inline-block">
                                            {{ $data['project']->user_project->where('role', 'student')[0]->user->user_code ?? '' }}
                                        </span>
                                    </div>
                                    {{-- <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">สาขาวิชา</span>:<span
                                            class="inline-block">คอมพิวเตอร์ธุรกิจ</span>
                                    </div> --}}
                                </figcaption>
                            </figure>

                            <figure
                                class="relative flex flex-col items-center w-auto p-6 space-y-6 break-words rounded-4 bg-slate-50 dark:bg-slate-900/40 sm:flex-row sm:space-y-0 sm:space-x-6">
                                <div class="flex items-center">
                                    <img src="https://images.pexels.com/photos/2887767/pexels-photo-2887767.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="avatar"
                                        class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                </div>
                                <figcaption class="space-y-1 text-center sm:text-left">
                                    <div class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data['project']->user_project->where('role', 'student')[1]->user->name ?? '' }}
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">รหัสนักศึกษา</span>:<span class="inline-block">
                                            {{ $data['project']->user_project->where('role', 'student')[1]->user->user_code ?? '' }}
                                        </span>
                                    </div>
                                    {{-- <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">สาขาวิชา</span>:<span
                                            class="inline-block">คอมพิวเตอร์ธุรกิจ</span>
                                    </div> --}}
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-3">
                {{-- อาจารย์ที่ปรึกษา --}}
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl lg:col-span-2">
                    <div
                        class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div
                            class="flex h-full items-center rounded-3 bg-orange-500 p-3.5 text-white dark:bg-slate-700/40">
                            <i class="text-2xl text-white bi bi-people-fill leading-0 dark:text-orange-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            อาจารย์ที่ปรึกษา
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="p-0 overflow-x-auto">
                            <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                                <figure
                                    class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 w-52 rounded-4 dark:border-slate-900 dark:bg-transparent md:w-60">
                                    <div class="flex items-center mt-4 mb-6">
                                        <img src="https://images.pexels.com/photos/371160/pexels-photo-371160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data['project']->user_project->where('role', 'teacher1')->first()->user->name ?? '' }}
                                    </figcaption>
                                    <span
                                        class="absolute top-0 right-0 px-3 py-1 text-sm font-black tracking-wider text-white bg-teal-500 rounded-bl-4 shadow-primary-outline dark:bg-slate-900/40 dark:text-gray-100 dark:shadow-dark-xl">
                                        ที่ปรึกษาหลัก
                                    </span>
                                </figure>

                                <figure
                                    class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 w-52 rounded-4 dark:border-slate-900 dark:bg-transparent md:w-60">
                                    <div class="flex items-center mt-4 mb-6">
                                        <img src="https://images.pexels.com/photos/1574164/pexels-photo-1574164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data['project']->user_project->where('role', 'teacher2')->first()->user->name ?? '' }}
                                    </figcaption>
                                    <span
                                        class="absolute top-0 right-0 px-3 py-1 text-sm font-black tracking-wider text-white bg-blue-500 rounded-bl-4 shadow-primary-outline dark:bg-slate-900/40 dark:text-gray-100 dark:shadow-dark-xl">
                                        ที่ปรึกษารอง
                                    </span>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ประธานสอบ --}}
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl">
                    <div
                        class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div
                            class="flex h-full items-center rounded-3 bg-orange-500 p-3.5 text-white dark:bg-slate-700/40">
                            <i class="text-2xl text-white bi bi-person-workspace leading-0 dark:text-orange-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            ประธานสอบ
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="p-0 overflow-x-auto">
                            <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                                <figure
                                    class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 w-60 rounded-4 dark:border-slate-900 dark:bg-transparent">
                                    <div class="flex items-center mt-4 mb-6">
                                        <img src="https://images.pexels.com/photos/1846597/pexels-photo-1846597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data['project']->user_project->where('role', 'teacher3')->first()->user->name ?? '' }}
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ข้อเสนอแนะ --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div
                        class="flex h-full items-center rounded-3 bg-violet-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="text-2xl text-white bi bi-chat-dots-fill leading-0 dark:text-violet-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ข้อเสนอแนะ
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 tracking-wide align-top border-gray-200 text-slate-500 dark:border-slate-600">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-xxs tracking-none text-slate-400 opacity-70 dark:border-slate-600">
                                        ชื่อผู้เสนอแนะ
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-xxs tracking-none text-slate-400 opacity-70 dark:border-slate-600">
                                        วันที่
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-xxs tracking-none text-slate-400 opacity-70 dark:border-slate-600">
                                        ข้อเสนอแนะ
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data['project']->comments as $comment)
                                    <tr>
                                        <td
                                            class="px-6 py-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-slate-400">
                                                {{ $comment['user']['name'] }}
                                            </h6>
                                        </td>
                                        <td
                                            class="px-6 py-3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                            <span
                                                class="text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">{{ $comment['created_at'] }}</span>
                                        </td>
                                        <td
                                            class="px-6 py-3 text-right align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                            <button type="button" data-modal-target="viewModal"
                                                data-modal-toggle="viewModal"
                                                class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-800">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-eye leading-0"></i>
                                                    <span class="block">ดูข้อเสนอแนะ</span>
                                                </div>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td
                                            class="px-6 py-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-slate-400">
                                                รอการเสนอแนะ
                                            </h6>
                                        </td>
                                        <td
                                            class="px-6 py-3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                            <span
                                                class="text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">{{ dateThai(now()) }}</span>
                                        </td>
                                        <td
                                            class="px-6 py-3 text-right align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                            <button type="button" data-modal-target="viewModal"
                                                data-modal-toggle="viewModal" disabled
                                                class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-800">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-eye leading-0"></i>
                                                    <span class="block">ดูข้อเสนอแนะ</span>
                                                </div>
                                            </button>
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Doc Upload Modal -->
    <div id="uploadModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
        <div class="relative w-full h-full max-w-xl md:h-auto">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                        <i class="bi bi-cloud-arrow-up leading-0"></i> แนบเอกสาร
                    </h3>
                    <button type="button"
                        class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="uploadModal">
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
                <div class="p-6 space-y-4">
                    <div>
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            แนบเอกสารสอบความก้าวหน้า
                        </label>
                        <input class="h-full p-0 input" type="file">
                        {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณาแนบเอกสารสอบความก้าวหน้า</span> --}}
                    </div>
                    {{-- โชว์เฉพาะตอนที่มีเอกสาร --}}
                    <a href="#"
                        class="inline-block text-sm font-bold leading-normal text-center text-teal-400 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-teal-600">
                        <div class="flex flex-row items-center gap-2">
                            <i class="bi bi-download leading-0"></i>
                            <span class="block">ดาวน์โหลดเอกสาร</span>
                        </div>
                    </a>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="uploadModal" type="button"
                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                        ยกเลิก
                    </button>
                    <button type="submit" class="text-sm font-medium text-white btn from-blue-500 to-violet-500">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-save-fill leading-0"></i>
                            <span class="block">บันทึก</span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Suggestion Modal View -->
    <div id="viewModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
        <div class="relative w-full h-full max-w-6xl md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                        <i class="bi bi-eye leading-0"></i> ดูข้อเสนอแนะ
                    </h3>
                    <button type="button"
                        class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
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
                            <ul class="mt-1.5 ml-1 list-inside list-disc">
                                <li>
                                    ชื่อเรื่อง ประเด็นปัญหา วัตถุประสงค์ ประโยชน์ ประชากรและกลุ่มตัวอย่าง
                                    ต้องสอดคล้องกัน
                                </li>
                                <li>
                                    ตรวจสอบสถิติที่ใช้ในบทที่ 3 กับสถิติที่วิเคราะห์ในบทที่ 4
                                    ถูกต้อง/เป็นไปตามที่คณะฯกำหนด
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
                            <ul class="mt-1.5 ml-1 list-inside list-disc">
                                <li>
                                    อักษรใช้ TH Sarabun PSK ขนาด 16 ธรรมดาตลอดทั้งเล่ม ยกเว้น หัวข้อใช้อักษรขนาด 16 หนา
                                    โดยหัวข้อ บทคัดย่อ กิตติกรรมประกาศ สารบัญ สารบัญตาราง สารบัญภาพ ให้ใช้ขนาดอักษร 16
                                    หนา
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore a, repellat sint iusto
                            aliquam
                            sequi ratione doloremque consectetur, pariatur libero incidunt quaerat quos voluptate.
                            Deleniti
                            officiis earum rerum omnis incidunt!
                        </p>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="viewModal" type="button"
                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                        ปิด
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
