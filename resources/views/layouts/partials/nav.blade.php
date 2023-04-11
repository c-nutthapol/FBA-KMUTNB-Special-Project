        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="false">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <h6 class="mb-0 font-bold text-white capitalize">
                    @yield('title')
                </h6>
                @php
                    $user = auth()->user();
                @endphp
                <div class="flex items-center justify-end mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="relative flex items-center">
                            <a href="javascript:;" dropdown-trigger aria-expanded="false"
                                class="flex flex-row items-center gap-2 px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                                {{-- <img src="https://images.pexels.com/photos/1436962/pexels-photo-1436962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    alt="avatar" class="object-cover object-center w-6 h-6 rounded"> --}}
                                {{-- กรณีที่ไม่มีรูป --}}

                                <i class="bi bi-person-fill"></i>
                                <span class="hidden sm:inline">{{ $user->name }}</span>
                            </a>

                            <ul dropdown-menu
                                class="text-sm transform-dropdown before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:shadow-dark-xl dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                                <!-- add show class on dropdown open js -->
                                <li class="relative mb-2">
                                    <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                                        href="{{ route('auth.account') }}">
                                        <div class="flex items-center py-1">
                                            <div
                                                class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-blue-500 to-violet-500 h-9 w-9 rounded-xl">
                                                <i class="text-lg bi bi-person-fill"></i>
                                            </div>
                                            <div>
                                                <h6
                                                    class="mb-0 text-sm font-normal tracking-wide leading-0 dark:text-white">
                                                    บัญชีผู้ใช้
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative">
                                    <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                        href="{{ route('auth.logout') }}">
                                        <div class="flex items-center py-1">
                                            <div
                                                class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-rose-600 to-pink-300 h-9 w-9 rounded-xl">
                                                <i class="text-lg bi bi-box-arrow-right"></i>
                                            </div>
                                            <div>
                                                <h6
                                                    class="mb-0 text-sm font-normal tracking-wide leading-0 dark:text-white">
                                                    ออกจากระบบ
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand"
                                sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-center px-4">
                            <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                                <i fixed-plugin-button-nav class="cursor-pointer bi bi-gear-fill leading-0"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
