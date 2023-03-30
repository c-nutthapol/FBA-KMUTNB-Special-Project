                <li class="mt-0.5 w-full">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ in_array(Route::currentRouteName(), ['student.project.home', 'student.project.attachment', 'student.project.suggestion', 'student.project.history']) ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('student.project.home') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">

                            <i
                                class="bi {{ in_array(Route::currentRouteName(), ['student.project.home', 'student.project.attachment', 'student.project.suggestion', 'student.project.history']) ? 'bi-folder-fill' : 'bi-folder' }} relative top-0 text-sm text-blue-500 leading-0"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">โครงงาน</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'student.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('student.petition') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'student.petition' ? 'bi-brush-fill' : 'bi-brush' }} relative top-0 text-sm leading-normal text-orange-500"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">เขียนคำร้องทั่วไป</span>
                    </a>
                </li>
