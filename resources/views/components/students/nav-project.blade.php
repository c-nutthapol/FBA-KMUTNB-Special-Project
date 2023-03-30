<nav class="block p-3 bg-white md:inline-block dark:bg-slate-700/40 rounded-2 overflow-x-auto">
    <ul class="flex flex-row flex-nowrap md:flex-wrap gap-1 sm:gap-4">
        <li>
            <a href="{{ route('student.project.home') }}"
                class="w-46 md:w-full flex items-center justify-center md:justify-start space-x-3 text-base text-slate-600 px-6 py-2.5  rounded-2
                            {{ Route::currentRouteName() == 'student.project.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg dark:text-slate-100 dark:bg-teal-700/30' : 'hover:bg-slate-600/20' }}">
                <i class="bi bi-globe2 leading-0"></i>
                <span class="block tracking-wide">
                    ข้อมูลทั่วไป
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('student.project.attachment') }}"
                class="w-46 md:w-full flex items-center justify-center md:justify-start space-x-3 text-base text-slate-600 px-6 py-2.5  rounded-2
                            {{ Route::currentRouteName() == 'student.project.attachment' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg dark:text-slate-100 dark:bg-teal-700/30' : 'hover:bg-slate-600/20' }}">
                <i class="bi bi-file-earmark-arrow-up leading-0"></i>
                <span class="block tracking-wide">
                    แนบเอกสาร
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('student.project.suggestion') }}"
                class="w-46 md:w-full flex items-center justify-center md:justify-start space-x-3 text-base text-slate-600 px-6 py-2.5  rounded-2
                            {{ Route::currentRouteName() == 'student.project.suggestion' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg dark:text-slate-100 dark:bg-teal-700/30' : 'hover:bg-slate-600/20' }}">
                <i class="bi bi-chat-dots leading-0"></i>
                <span class="block tracking-wide">
                    ข้อเสนอแนะ
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('student.project.history') }}"
                class="w-68 md:w-full flex items-center justify-center md:justify-start space-x-3 text-base text-slate-600 px-6 py-2.5  rounded-2
                            {{ Route::currentRouteName() == 'student.project.history' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg dark:text-slate-100 dark:bg-teal-700/30' : 'hover:bg-slate-600/20' }}">
                <i class="bi bi-clock-history leading-0"></i>
                <span class="block tracking-wide">
                    ประวัติการส่งคำร้อง
                </span>
            </a>
        </li>
    </ul>
</nav>
