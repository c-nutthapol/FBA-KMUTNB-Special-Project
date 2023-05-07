    <aside
        class="fixed inset-y-0 z-20 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-24">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm cursor-default whitespace-nowrap dark:text-white text-slate-700"
                href="javascript:void(0);">
                <img src="{{ asset('assets/img/logo.png') }}"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand rounded-2"
                    alt="main_logo" />
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-auto h-auto overflow-hidden grow basis-full">
            <ul class="flex flex-col pb-6 pl-0 mb-0">
                {{-- Start menu admin --}}
                {{-- @if (auth()->user()->role->name == 'admin') --}}
                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('home') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'home' ? 'bi-pie-chart-fill' : 'bi-pie-chart' }} relative top-0 text-sm leading-normal text-teal-400"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">หนัาหลัก</span>
                    </a>
                </li>
                {{-- @endif --}}

                {{-- End menu admin --}}

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                        โครงงานพิเศษ
                    </h6>
                </li>

                {{-- menu student --}}
                @if (auth()->user()->role->name == 'student')
                    @include('layouts.menus.student')
                @endif


                {{-- menu teacher --}}
                @if (auth()->user()->role->name == 'teacher')
                    @include('layouts.menus.teacher')
                @endif

                {{-- Start menu admin --}}
                @if (auth()->user()->role->name == 'admin')
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            คำร้องทั่วไป
                        </h6>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.petition') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.petition' ? 'bi-brush-fill' : 'bi-brush' }} relative top-0 text-sm text-orange-500 leading-0"></i>
                            </div>
                            <span
                                class="ml-1 duration-300 opacity-100 pointer-events-none ease">อนุมัติคำร้องทั่วไป</span>
                        </a>
                    </li>

                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            ตั้งค่าข้อมูลผู้ใช้
                        </h6>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.users' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.users') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.users' ? 'bi-people-fill' : 'bi-people' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                ข้อมูลผู้ใช้งาน
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.users-permissions' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.users-permissions') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.users-permissions' ? 'bi-person-fill-gear' : 'bi-person-gear' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                กำหนดสิทธิ์ผู้ใช้งาน
                            </span>
                        </a>
                    </li>

                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            ตั้งค่า
                        </h6>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.term' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.term') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.term' ? 'bi-calendar-week-fill ' : 'bi-calendar-week' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                ภาคเรียน
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.project-steps' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.project-steps') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-gray-700 bi bi-list-ol"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                ขั้นตอนโครงงาน
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.suggestions' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.suggestions') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.suggestions' ? 'bi-chat-dots-fill ' : 'bi-chat-dots' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                ข้อเสนอแนะ
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.banners' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.banners') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.banners' ? 'bi-image-fill ' : 'bi-image' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                แบนเนอร์
                            </span>
                        </a>
                    </li>

                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            log
                        </h6>
                    </li>


                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.logs.students' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.logs.students') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.logs.students' ? 'bi-mortarboard-fill' : 'bi-mortarboard' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                นักศึกษา
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.logs.teachers' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.logs.teachers') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.logs.teachers' ? 'bi-person-fill' : 'bi-person' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                อาจารย์
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.logs.administrators' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.logs.administrators') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.logs.administrators' ? 'bi-person-badge-fill' : 'bi-person-badge' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                ผู้ดูแลระบบ
                            </span>
                        </a>
                    </li>
                @endif
                {{-- End menu admin --}}

            </ul>
        </div>
    </aside>
