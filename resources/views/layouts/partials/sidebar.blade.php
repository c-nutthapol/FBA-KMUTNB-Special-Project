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

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
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

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                        โครงงานและคำร้อง
                    </h6>
                </li>

                {{-- menu student --}}
                {{-- @include('layouts.menus.student') --}}

                {{-- menu teacher --}}
                @include('layouts.menus.teacher')

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                        ตั้งค่า
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.permissions' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('admin.settings.permissions') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.permissions' ? 'bi-person-fill-gear' : 'bi-person-gear' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                            กำหนดสิทธิ์ผู้ใช้งาน
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>
