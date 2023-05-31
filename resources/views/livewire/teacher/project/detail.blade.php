<div class="flex flex-wrap mb-6 -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="inline-block">
            <a href="
            @if (str_contains(url()->previous(), "topic"))
                {{ route('teacher.project.topic') }}
            @elseif (str_contains(url()->previous(), "progress"))
                {{ route('teacher.project.progress') }}
            @elseif (str_contains(url()->previous(), "defense_exam"))
                {{ route('teacher.project.defense') }}
            @elseif (str_contains(url()->previous(), "book"))
            {{ route('teacher.project.book') }}
            @else
                {{ route('teacher.project.home') }}
            @endif"
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
                    <span class="block font-bold">{{ $detail->name_th }}</span>
                    <span class="block font-normal text-slate-600 dark:text-white">{{ $detail->name_en }}</span>
                </h5>
            </div>
            <div class="pb-6 sm:p-6">
                {{-- ถ้าไม่มีเอกสารให้ซ่อน --}}
                <a href="/{{$detail->files->sortByDesc('created_at')->first()->path}}" download class="text-xs text-white btn from-teal-400 to-green-400">
                    <div class="flex flex-row items-center gap-3">
                        <i class="bi bi-download leading-0"></i>
                        <span class="block">โหลดเอกสาร</span>
                    </div>
                </a>

                <a href="{{ route('teacher.project.suggestion',['id' => $detail->id]) }}"
                    class="text-xs text-white btn from-blue-500 to-violet-500" type="button">
                    <div class="flex flex-row items-center gap-3">
                        <i class="bi bi-chat-dots-fill leading-0"></i>
                        <span class="block">เสนอแนะ</span>
                    </div>
                </a>
            </div>
        </div>

        {{-- ผู้จัดทำโครงงาน --}}
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div
                class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                    <i class="text-2xl text-white bi bi-mortarboard-fill leading-0 dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    ผู้จัดทำโครงงาน
                </h5>
            </div>
            <div class="flex-auto p-6">
                <div class="p-0 overflow-x-auto">
                    <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                        @foreach ($detail->user_project as $item_student)
                            @if (str_contains($item_student,"student"))
                                <figure
                                    class="relative flex flex-col items-center w-auto p-6 space-y-6 break-words sm:flex-row bg-slate-50 dark:bg-slate-900/40 sm:space-y-0 sm:space-x-6 rounded-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                            class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                    </div>
                                    <figcaption class="space-y-1 text-center sm:text-left">
                                        <div class="text-lg font-bold tracking-wide dark:text-white">
                                            {{$item_student->user->displayname ?? $item_student->user->name}}
                                        </div>
                                        <div class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                            <span class="inline-block">รหัสนักศึกษา</span>:<span class="inline-block">5402041520035</span>
                                        </div>
                                        <div class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                            <span class="inline-block">สาขาวิชา</span>:<span class="inline-block">คอมพิวเตอร์ธุรกิจ</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- อาจารย์ที่ปรึกษา --}}
        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-3">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl lg:col-span-2 dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-orange-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-people-fill leading-0 dark:text-orange-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        อาจารย์ที่ปรึกษา
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                            @foreach ($detail->user_project as $item_teacher)
                                @if (str_contains($item_teacher,"teacher1") || str_contains($item_teacher,"teacher2"))
                                    <figure
                                        class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-52 md:w-60 rounded-4">
                                        <div class="flex items-center mt-4 mb-6">
                                            <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                                class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                        </div>
                                        <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                            {{$item_teacher->user->displayname ?? $item_teacher->user->name}}
                                        </figcaption>
                                        <span
                                            class="absolute top-0 right-0 px-3 py-1 text-sm font-black tracking-wider text-white bg-teal-500 dark:bg-slate-900/40 rounded-bl-4 shadow-primary-outline dark:shadow-dark-xl dark:text-gray-100">
                                            @if ($item_teacher->role == "teacher1" || $item_teacher->role == "teacher2")
                                                ที่ปรึกษาหลัก
                                            @else
                                                ที่ปรึกษารอง
                                            @endif
                                        </span>
                                    </figure>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- ประธานสอบ --}}
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-orange-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-person-workspace leading-0 dark:text-orange-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ประธานสอบ
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                            @foreach ($detail->user_project as $item_external)
                                @if (str_contains($item_external->role,"teacher3"))
                                    <figure
                                        class="relative flex flex-col items-center p-6 overflow-hidden break-words bg-white border border-gray-100 dark:border-slate-900 dark:bg-transparent w-60 rounded-4">
                                        <div class="flex items-center mt-4 mb-6">
                                            <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                                class="object-cover object-center w-32 h-32 rounded-4 shadow-dark-blur" />
                                        </div>
                                        <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                            {{$item_external->user->displayname ?? $item_external->user->name}}
                                        </figcaption>
                                    </figure>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
