                <li class="mt-0.5 w-full">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.project.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('admin.project.home') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi  {{ Route::currentRouteName() == 'admin.project.home' ? 'bi-1-circle-fill' : 'bi-1-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนสอบหัวข้อ</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.project.topic' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                    href="{{ route('admin.project.topic') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i
                            class="bi  {{ Route::currentRouteName() == 'admin.project.topic' ? 'bi-2-circle-fill' : 'bi-2-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                    </div>
                    <span
                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">ผลการสอบหัวข้อ</span>
                </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.project.progress' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('admin.project.progress') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi  {{ Route::currentRouteName() == 'admin.project.progress' ? 'bi-3-circle-fill' : 'bi-3-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนสอบความก้าวหน้า</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.project.progressresult' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                    href="{{ route('admin.project.progressresult') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i
                            class="bi  {{ Route::currentRouteName() == 'admin.project.progressresult' ? 'bi-4-circle-fill' : 'bi-4-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                    </div>
                    <span
                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">ผลการสอบความก้าวหน้า</span>
                </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.project.defense' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('admin.project.defense') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi  {{ Route::currentRouteName() == 'admin.project.defense' ? 'bi-5-circle-fill' : 'bi-5-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease">ลงทะเบียนสอบป้องกัน</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.project.defenseresult' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                    href="{{ route('admin.project.defenseresult') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i
                            class="bi  {{ Route::currentRouteName() == 'admin.project.defenseresult' ? 'bi-6-circle-fill' : 'bi-6-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                    </div>
                    <span
                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">ผลการสอบป้องกัน</span>
                </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.project.book' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                        href="{{ route('admin.project.book') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi  {{ Route::currentRouteName() == 'admin.project.book' ? 'bi-7-circle-fill' : 'bi-7-circle' }}  relative top-0 text-sm text-blue-500 leading-0"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">ส่งเล่ม</span>
                    </a>
                </li>


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
                            ข่าวสาร
                        </h6>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.news.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.news.home') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.news.home' ? 'bi-file-earmark-richtext-fill ' : ' bi-file-earmark-richtext' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                ข่าวสาร
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.newtype' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.newtype') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.newtype' ? 'bi-newspaper' : 'bi-newspaper' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                ประเภทข่าว
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
                        <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.petition') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.petition' ? 'bi-brush-fill' : 'bi-brush' }} relative top-0 text-sm  text-gray-700 leading-0"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">คำร้อง</span>
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


                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.department' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.department') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.department' ? 'bi-trophy-fill ' : 'bi-trophy' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                สาขา
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.document' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.document') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.document' ? 'bi-book-fill ' : 'bi-book' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                เอกสารดาวน์โหลด
                            </span>
                        </a>
                    </li>


                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.settings.status' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.settings.status') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.settings.status' ? 'bi-tags-fill ' : 'bi-tags' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                สถานะ
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
                            href="{{ route('admin.logs', 'students') }}">
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
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.logs.admins' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.logs', 'admins') }}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i
                                    class="bi {{ Route::currentRouteName() == 'admin.logs.admins' ? 'bi-person-fill' : 'bi-person' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                                อาจารย์
                            </span>
                        </a>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors tracking-wide {{ Route::currentRouteName() == 'admin.logs.administrators' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }}"
                            href="{{ route('admin.logs', 'administrators') }}">
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
