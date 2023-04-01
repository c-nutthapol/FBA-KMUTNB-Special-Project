            <div id="drawer-setting"
                class="fixed z-40 w-full overflow-y-auto bg-white  border-t border-gray-200 rounded-t-lg dark:border-gray-700 dark:bg-gray-800 transition-transform bottom-0 left-0 right-0 translate-y-full bottom-[60px]"
                tabindex="-1" aria-labelledby="drawer-setting-label">
                <div class="p-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700"
                    data-drawer-toggle="drawer-setting">
                    <span
                        class="absolute w-8 h-1 -translate-x-1/2 bg-gray-300 rounded-lg top-3 left-1/2 dark:bg-gray-600"></span>
                    <h5 id="drawer-setting-label"
                        class="inline-flex items-center mb-0 text-base text-gray-500 dark:text-gray-400">
                        <div class="flex flex-row items-center space-x-3">
                            <i class="bi bi-gear-fill leading-0"></i>
                            <span class="inline-block">ตั้งค่า</span>
                        </div>
                    </h5>
                </div>

                <div class="grid grid-cols-1 gap-4 p-4 lg:grid-cols-4">
                    <a href="{{ route('teacher.project.suggestion') }}"
                        class="p-4 bg-transparent rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700">
                        <div
                            class="flex items-center justify-center w-12 h-12 p-2 mx-auto mb-3 bg-gray-200 rounded-full dark:bg-gray-500">
                            <i class="text-lg text-gray-500 bi bi-chat-dots-fill dark:text-gray-400 leading-0"></i>
                        </div>
                        <div class="font-medium tracking-wide text-center text-gray-500 dark:text-gray-400">เสนอแนะ
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-transparent rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700">
                        <div
                            class="flex items-center justify-center w-12 h-12 p-2 mx-auto mb-3 bg-gray-200 rounded-full dark:bg-gray-500">
                            <i
                                class="text-lg text-gray-500 bi bi-calendar2-check-fill dark:text-gray-400 leading-0"></i>
                        </div>
                        <div class="font-medium tracking-wide text-center text-gray-500 dark:text-gray-400">อนุมัติสอบ
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-transparent rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700">
                        <div
                            class="flex items-center justify-center w-12 h-12 p-2 mx-auto mb-3 bg-gray-200 rounded-full dark:bg-gray-500">
                            <i class="text-lg text-gray-500 bi-clipboard2-check-fill dark:text-gray-400 leading-0"></i>
                        </div>
                        <div class="font-medium tracking-wide text-center text-gray-500 dark:text-gray-400">อนุมัติผลสอบ
                        </div>
                    </a>
                </div>
            </div>
