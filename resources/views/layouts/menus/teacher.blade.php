                             <li class="w-full mt-4">
                                 <h6
                                     class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                                     โครงงานที่รับผิดชอบ
                                 </h6>
                             </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.home') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.home' ? 'bi-1-circle-fill' : 'bi-1-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนโครงงาน</span>
                                 </a>
                             </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.progress' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.progress') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.progress' ? 'bi-2-circle-fill' : 'bi-2-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">ยื่นขอสอบความก้าวหน้า</span>
                                 </a>
                             </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.defense' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.defense') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.defense' ? 'bi-3-circle-fill' : 'bi-3-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span
                                         class="ml-1 duration-300 opacity-100 pointer-events-none ease">ยื่นขอสอบป้องกัน</span>
                                 </a>
                             </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.project.book' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                                     href="{{ route('teacher.project.book') }}">
                                     <div
                                         class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                         <i
                                             class="bi  {{ Route::currentRouteName() == 'teacher.project.book' ? 'bi-4-circle-fill' : 'bi-4-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                                     </div>
                                     <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">ส่งเล่ม</span>
                                 </a>
                             </li>

                             <li class="w-full mt-4">
                                 <h6
                                     class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                                     คำร้องทั่วไป
                                 </h6>
                             </li>

                             <li class="mt-0.5 w-full">
                                 <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'teacher.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
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
