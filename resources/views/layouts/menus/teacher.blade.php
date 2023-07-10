                             {{-- <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.home') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.home' ? 'bi-1-circle-fill' : 'bi-1-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนโครงงาน</span>
                                 </a>
                             </li> --}}

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.home') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.home' ? 'bi-1-circle-fill' : 'bi-1-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนสอบหัวข้อ</span>
                                 </a>
                             </li>

                            <li class="mt-0.5 w-full">
                                <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.topic' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                    href="{{ route('teacher.project.topic') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="bi  {{ Route::currentRouteName() == 'teacher.project.topic' ? 'bi-2-circle-fill' : 'bi-2-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                    </div>
                                    <span
                                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">ผลการสอบหัวข้อ</span>
                                </a>
                            </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.progress' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.progress') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.progress' ? 'bi-3-circle-fill' : 'bi-3-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนสอบความก้าวหน้า</span>
                                 </a>
                             </li>

                             <li class="mt-0.5 w-full">
                                <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.progressresult' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                    href="{{ route('teacher.project.progressresult') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="bi  {{ Route::currentRouteName() == 'teacher.project.progressresult' ? 'bi-4-circle-fill' : 'bi-4-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                    </div>
                                    <span
                                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">ผลการสอบความก้าวหน้า</span>
                                </a>
                            </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.defense' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.defense') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.defense' ? 'bi-5-circle-fill' : 'bi-5-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนสอบป้องกัน</span>
                                 </a>
                             </li>

                             <li class="mt-0.5 w-full">
                                <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.defenseresult' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                    href="{{ route('teacher.project.defenseresult') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="bi  {{ Route::currentRouteName() == 'teacher.project.defenseresult' ? 'bi-6-circle-fill' : 'bi-6-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                    </div>
                                    <span
                                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">ผลการสอบป้องกัน</span>
                                </a>
                            </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.book' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.book') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.book' ? 'bi-7-circle-fill' : 'bi-7-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">ส่งเล่ม</span>
                                 </a>
                             </li>

                             <li class="w-full mt-4">
                                 <h6
                                     class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-slate-300 opacity-60">
                                     คำร้องทั่วไป
                                 </h6>
                             </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-slate-300 dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.petition') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi {{ Route::currentRouteName() == 'teacher.petition' ? 'bi-brush-fill' : 'bi-brush' }} relative top-0 text-sm text-orange-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">อนุมัติคำร้องทั่วไป</span>
                                 </a>
                             </li>

                             <li class="mt-4 w-full">
                                <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                                    สืบค้นข้อมูล
                                </h6>
                            </li>

                            <li class="mt-0.5 w-full">
                                <a class="ease-nav-brand {{ Route::currentRouteName() == 'teacher.allproject' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                                    href="{{ route('teacher.allproject') }}">
                                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="bi {{ Route::currentRouteName() == 'teacher.allproject' ? 'bi-book-fill' : 'bi-book' }} relative top-0 text-sm leading-normal text-teal-500"></i>
                                    </div>
                                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">โครงงานพิเศษทั้งหมด</span>
                                </a>
                            </li>

                            <li class="mt-4 w-full">
                                <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                                    ดาวน์โหลดแบบฟอร์ม
                                </h6>
                            </li>

                            <li class="mt-0.5 w-full">
                                <a class="ease-nav-brand {{ Route::currentRouteName() == 'teacher.document' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                                    href="{{ route('teacher.document') }}">
                                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="bi {{ Route::currentRouteName() == 'teacher.document' ? 'bi-cloud-arrow-down-fill' : 'bi-cloud-arrow-down' }} relative top-0 text-sm leading-normal text-teal-500"></i>
                                    </div>
                                    <span class="ease pointer-events-none ml-1 opacity-100 duration-300">เอกสารต่าง ๆ</span>
                                </a>
                            </li>
