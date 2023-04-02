                <li class="mt-0.5 w-full">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ in_array(Route::currentRouteName(), ['teacher.project.home', 'teacher.project.details', 'teacher.project.suggestion']) ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('teacher.project.home') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ in_array(Route::currentRouteName(), ['teacher.project.home', 'teacher.project.details', 'teacher.project.suggestion']) ? 'bi-archive-fill' : 'bi-archive' }} relative top-0 text-sm text-blue-500 leading-0"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">โครงงานที่รับผิดชอบ</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('teacher.project.petition') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'teacher.project.petition' ? 'bi-brush-fill' : 'bi-brush' }} relative top-0 text-sm text-blue-500 leading-0"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">อนุมัติคำร้องทั่วไป</span>
                    </a>
                </li>
