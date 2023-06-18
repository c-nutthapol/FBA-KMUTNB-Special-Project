@section('title', 'โครงงาน')
<div>
    {{-- <div class="-mx-3 mb-8 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">
            <ol
                class="flex w-full items-center space-x-2 rounded-2xl border border-gray-200 bg-white px-6 py-4 text-sm font-medium text-gray-500 shadow-xl dark:border-slate-850 dark:bg-slate-850 dark:text-gray-400 dark:shadow-dark-xl sm:space-x-4 sm:text-base">
                <li>
                    <a href="#" class="flex items-center text-teal-400 dark:text-teal-400">
                        <span
                            class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-teal-400 bg-teal-400 text-base text-white dark:border-teal-400">
                            <i class="bi bi-check-lg"></i>
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                สอบหัวข้อ
                            </span>

                        </div>
                        <svg aria-hidden="true" class="ml-2 h-4 w-4 sm:ml-4" fill="none" stroke="currentColor"
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
                            class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-gray-400 bg-gray-400 text-base text-white dark:border-gray-400">
                            2
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                ลงทะเบียนเพื่อขอสอบหัวข้อ
                            </span>

                        </div>
                        <svg aria-hidden="true" class="ml-2 h-4 w-4 sm:ml-4" fill="none" stroke="currentColor"
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
                            class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-teal-400 bg-teal-400 text-base text-white dark:border-teal-400">
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
                        </div>
                        <svg aria-hidden="true" class="ml-2 h-4 w-4 sm:ml-4" fill="none" stroke="currentColor"
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
                            class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-gray-400 bg-gray-400 text-base text-white dark:border-gray-400">
                            4
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                สอบป้องกัน
                            </span>

                        </div>
                        <svg aria-hidden="true" class="ml-2 h-4 w-4 sm:ml-4" fill="none" stroke="currentColor"
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
                            class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-gray-400 bg-gray-400 text-base text-white dark:border-gray-400">
                            5
                        </span>
                        <div class="tracking-wide">
                            <span class="block">
                                ส่งเล่ม
                            </span>

                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div> --}}
    @livewire('students.project.components.header', ['project' => $data->project])
    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">

            {{-- ชื่อโครงงาน --}}

            <div
                class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-mortarboard-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        {{ $data->error->name }}
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="overflow-x-auto p-0">
                        <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                            @if ($data->error->redirect ?? false)
                                <a href="{{ $data->error->redirect }}">
                                    <button
                                        class="btn from-teal-400 to-green-400 text-xl text-white">{{ $data->error->btn }}</button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

