<div>
    <li class="mt-0.5 w-full">
        <a class="ease-nav-brand {{ Route::currentRouteName() == 'student.suggestion' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
            href="{{ route('student.suggestion') }}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <i
                    class="bi {{ Route::currentRouteName() == 'student.suggestion' ? 'bi-chat-dots-fill' : 'bi-chat-dots' }} relative top-0 text-sm leading-normal text-violet-500"></i>
            </div>
            <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ข้อเสนอแนะ</span>
            <div class="flex-1 text-end">
                <span
                    class="py-1 px-1.5 text-white rounded-full bg-red-500 text-xs  dark:bg-red-900 dark:text-red-300">{{$count}}</span>
            </div>
        </a>
    </li>
</div>
