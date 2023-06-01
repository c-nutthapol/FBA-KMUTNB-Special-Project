<div id="viewModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full"
    data-modal-show="viewModal">
    <div class="relative h-full w-full max-w-6xl md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                    <i class="bi bi-eye leading-0"></i> ดูข้อเสนอแนะ
                </h3>
                <button type="button"
                    class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="viewModal">
                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">ปิด</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="space-y-6 p-6">
                <div
                    class="mb-4 flex flex-col rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400">
                    <div class="flex flex-row space-x-1">
                        <i class="bi bi-badge-ad-fill"></i>
                        <span class="block font-bold tracking-wide">หัวข้อที่ผิดบ่อย</span>
                    </div>
                    <div>
                        <ul class="mt-1.5 ml-1 list-inside list-disc">
                            <li>
                                ชื่อเรื่อง ประเด็นปัญหา วัตถุประสงค์ ประโยชน์ ประชากรและกลุ่มตัวอย่าง
                                ต้องสอดคล้องกัน
                            </li>
                            <li>
                                ตรวจสอบสถิติที่ใช้ในบทที่ 3 กับสถิติที่วิเคราะห์ในบทที่ 4
                                ถูกต้อง/เป็นไปตามที่คณะฯกำหนด
                            </li>
                            <li>
                                ตรวจสอบปรับแก้เลขสถิติ และการแปลผลการวิจัย
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="mb-4 flex flex-col rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400">
                    <div class="flex flex-row space-x-1">
                        <i class="bi bi-badge-ad-fill"></i>
                        <span class="block font-bold tracking-wide">การจัดรูปแบบการพิมพ์ที่ผิดบ่อย</span>
                    </div>
                    <div>
                        <ul class="mt-1.5 ml-1 list-inside list-disc">
                            <li>
                                อักษรใช้ TH Sarabun PSK ขนาด 16 ธรรมดาตลอดทั้งเล่ม ยกเว้น หัวข้อใช้อักษรขนาด 16 หนา
                                โดยหัวข้อ บทคัดย่อ กิตติกรรมประกาศ สารบัญ สารบัญตาราง สารบัญภาพ ให้ใช้ขนาดอักษร 16
                                หนา
                                ยกเว้น บทที่ ชื่อบท บรรณานุกรม ใช้ขนาดอักษร 20 หนา
                            </li>
                            <li>
                                หัวข้อหลักในเนื้อหาบทที่ 1-5 ต้องจัดชิดซ้าย ขนาดอักษร 16 หนา
                            </li>
                            <li>
                                บรรณานุกรมจัดรูปแบบตาม APA แบบขีดเส้นใต้
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-3">
                    <label class="mb-2 text-sm font-bold tracking-wide dark:text-white dark:opacity-80">
                        ข้อเสนอแนะอื่น ๆ
                    </label>
                    <p class="mb-0 text-sm leading-relaxed tracking-wide dark:text-gray-300">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore a, repellat sint iusto
                        aliquam
                        sequi ratione doloremque consectetur, pariatur libero incidunt quaerat quos voluptate.
                        Deleniti
                        officiis earum rerum omnis incidunt!
                    </p>
                </div>
            </div>
            <!-- Modal footer -->
            <div
                class="flex items-center justify-end space-x-2 rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                <button data-modal-hide="viewModal" type="button"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                    ปิด
                </button>
            </div>
        </div>
    </div>
</div>

