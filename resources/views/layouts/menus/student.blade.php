<li class="mt-0.5 w-full">
    <a class="ease-nav-brand {{ in_array(Route::currentRouteName(), ['student.project.home', 'student.project.create', 'student.project.edit']) ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
        href="{{ route('student.project.home') }}">
        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">

            <i
                class="bi {{ in_array(Route::currentRouteName(), ['student.project.home', 'student.project.home', 'student.project.edit']) ? 'bi-folder-fill' : 'bi-folder' }} relative top-0 text-sm leading-0 text-blue-500"></i>
        </div>
        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">โครงงาน</span>
    </a>
</li>
<li class="mt-0.5 w-full">
    <a class="ease-nav-brand {{ Route::currentRouteName() == 'student.file' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
        href="{{ route('student.file') }}">
        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i
                class="bi {{ Route::currentRouteName() == 'student.file' ? 'bi-file-earmark-medical-fill' : 'bi-file-earmark-medical' }} relative top-0 text-sm leading-normal text-sky-500"></i>
        </div>
        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ประวัติการแนบไฟล์</span>
    </a>
</li>

<li class="mt-0.5 w-full">
    <a class="ease-nav-brand {{ Route::currentRouteName() == 'student.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
        href="{{ route('student.petition') }}">
        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i
                class="bi {{ Route::currentRouteName() == 'student.petition' ? 'bi-brush-fill' : 'bi-brush' }} relative top-0 text-sm leading-normal text-orange-500"></i>
        </div>
        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">เขียนคำร้องทั่วไป</span>
    </a>
</li>

<li class="mt-0.5 w-full">
    <a class="ease-nav-brand {{ Route::currentRouteName() == 'student.history' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
        href="{{ route('student.history') }}">
        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i
                class="bi {{ Route::currentRouteName() == 'student.history' ? 'bi-clock-fill' : 'bi-clock-history' }} relative top-0 text-sm leading-normal text-gray-500"></i>
        </div>
        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ประวัติการส่งคำร้อง</span>
    </a>
</li>

<li class="mt-0.5 w-full">
    <a class="ease-nav-brand {{ Route::currentRouteName() == 'student.suggestion' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
        href="{{ route('student.suggestion') }}">
        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i
                class="bi {{ Route::currentRouteName() == 'student.suggestion' ? 'bi-chat-dots-fill' : 'bi-chat-dots' }} relative top-0 text-sm leading-normal text-violet-500"></i>
        </div>
        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ข้อเสนอแนะ</span>
    </a>
</li>

<li class="mt-0.5 w-full">
    <a class="ease-nav-brand {{ Route::currentRouteName() == 'student.document' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
        href="{{ route('student.document') }}">
        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i
                class="bi {{ Route::currentRouteName() == 'student.document' ? 'bi-cloud-arrow-down-fill' : 'bi-cloud-arrow-down' }} relative top-0 text-sm leading-normal text-teal-500"></i>
        </div>
        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ดาวน์โหลดแบบฟอร์ม</span>
    </a>
</li>
