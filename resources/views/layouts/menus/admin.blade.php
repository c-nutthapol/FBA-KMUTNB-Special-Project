                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.home') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.home' ? 'bi-1-circle-fill' : 'bi-1-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ลงทะเบียนสอบหัวข้อ</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.topic' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.topic') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.topic' ? 'bi-2-circle-fill' : 'bi-2-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ผลการสอบหัวข้อ</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.progress' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.progress') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.progress' ? 'bi-3-circle-fill' : 'bi-3-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span
                            class="ease pointer-events-none ml-1 opacity-100 duration-300">ลงทะเบียนสอบความก้าวหน้า</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.progressresult' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.progressresult') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.progressresult' ? 'bi-4-circle-fill' : 'bi-4-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ผลการสอบความก้าวหน้า</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.defense' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.defense') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.defense' ? 'bi-5-circle-fill' : 'bi-5-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ลงทะเบียนสอบป้องกัน</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.defenseresult' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.defenseresult') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.defenseresult' ? 'bi-6-circle-fill' : 'bi-6-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ผลการสอบป้องกัน</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.book' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.book') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.book' ? 'bi-7-circle-fill' : 'bi-7-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ส่งเล่ม</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.project.allprocess' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.project.allprocess') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.project.allprocess' ? 'bi-8-circle-fill' : 'bi-8-circle' }} relative top-0 text-sm leading-0 text-blue-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">รวมทั้งหมด</span>
                    </a>
                </li>

                <li class="mt-4 w-full">
                    <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                        คำร้องทั่วไป
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.petition') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.petition' ? 'bi-triangle-fill' : 'bi-triangle' }} relative top-0 text-sm leading-0 text-orange-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">รออนุมัติคำร้องทั่วไป</span>
                    </a>
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.petition_all' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                    href="{{ route('admin.petition_all') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.petition_all' ? 'bi-triangle-fill' : 'bi-triangle' }} relative top-0 text-sm leading-0 text-green-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">คำร้องทั่วไปทั้งหมด</span>
                    </a>
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.petition_special' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                    href="{{ route('admin.petition_special') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.petition_special' ? 'bi-triangle-fill' : 'bi-triangle' }} relative top-0 text-sm leading-0 text-orange-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">รออนุมัติลงทะเบียนล่าช้า</span>
                    </a>
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.petition_specialall' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                    href="{{ route('admin.petition_specialall') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.petition_specialall' ? 'bi-triangle-fill' : 'bi-triangle' }} relative top-0 text-sm leading-0 text-green-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">ลงทะเบียนล่าช้าทั้งหมด</span>
                    </a>
                </li>
                <li class="mt-4 w-full">
                    <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                        สืบค้นข้อมูล
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.allproject' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.allproject') }}">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.allproject' ? 'bi-book-fill' : 'bi-book' }} relative top-0 text-sm leading-normal text-teal-500"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">โครงงานพิเศษทั้งหมด</span>
                    </a>
                </li>

                <li class="mt-4 w-full">
                    <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                        ตั้งค่าข้อมูลผู้ใช้
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.users' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.users') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.users' ? 'bi-people-fill' : 'bi-people' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ข้อมูลผู้ใช้งาน
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.users-permissions' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.users-permissions') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.users-permissions' ? 'bi-person-fill-gear' : 'bi-person-gear' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            กำหนดสิทธิ์ผู้ใช้งาน
                        </span>
                    </a>
                </li>

                <li class="mt-4 w-full">
                    <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                        ข่าวสาร
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.news.home' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.news.home') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.news.home' ? 'bi-file-earmark-richtext-fill ' : ' bi-file-earmark-richtext' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ข่าวสาร
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.newtype' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.newtype') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.newtype' ? 'bi-newspaper' : 'bi-newspaper' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ประเภทข่าว
                        </span>
                    </a>
                </li>

                <li class="mt-4 w-full">
                    <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                        ตั้งค่า
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.term' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.term') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.term' ? 'bi-calendar-week-fill ' : 'bi-calendar-week' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ภาคเรียน
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.project-steps' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.project-steps') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="bi bi-list-ol relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ขั้นตอนโครงงาน
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.petition' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.petition') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.petition' ? 'bi-brush-fill' : 'bi-brush' }} relative top-0 text-sm leading-0 text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">คำร้อง</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.suggestions' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.suggestions') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.suggestions' ? 'bi-chat-dots-fill ' : 'bi-chat-dots' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ข้อเสนอแนะ
                        </span>

                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.banners' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.banners') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.banners' ? 'bi-image-fill ' : 'bi-image' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            แบนเนอร์
                        </span>

                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.cover' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.cover') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.cover' ? 'bi-image-fill ' : 'bi-image' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            รูปหน้าปก
                        </span>

                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.department' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.department') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.department' ? 'bi-trophy-fill ' : 'bi-trophy' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            สาขา
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.document' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.document') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.document' ? 'bi-book-fill ' : 'bi-book' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            เอกสารดาวน์โหลด
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.status' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.status') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.status' ? 'bi-tags-fill ' : 'bi-tags' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            สถานะ
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.settings.location' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.settings.location') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.settings.location' ? 'bi-tags-fill ' : 'bi-tags' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ข้อมูลติดต่อ
                        </span>
                    </a>
                </li>

                <li class="mt-4 w-full">
                    <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-slate-300">
                        log
                    </h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.logs.students' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.logs', 'students') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.logs.students' ? 'bi-mortarboard-fill' : 'bi-mortarboard' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            นักศึกษา
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.logs.teachers' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.logs', 'teachers') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.logs.teachers' ? 'bi-person-fill' : 'bi-person' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            อาจารย์
                        </span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="ease-nav-brand {{ Route::currentRouteName() == 'admin.logs.administrators' ? 'bg-teal-500/13 font-semibold text-teal-700 rounded-lg' : '' }} my-0 mx-2 flex items-center whitespace-nowrap py-2.7 px-4 text-sm tracking-wide transition-colors dark:text-slate-300 dark:opacity-80"
                        href="{{ route('admin.logs', 'administrators') }}">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i
                                class="bi {{ Route::currentRouteName() == 'admin.logs.administrators' ? 'bi-person-badge-fill' : 'bi-person-badge' }} relative top-0 text-sm leading-normal text-gray-700"></i>
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">
                            ผู้ดูแลระบบ
                        </span>
                    </a>
                </li>

