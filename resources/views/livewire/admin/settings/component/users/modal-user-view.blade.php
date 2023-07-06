<div id="ModalUserView" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full"
    wire:ignore.self>
    <div class="relative w-full h-full max-w-xl md:h-auto">
        <!-- Modal content -->
        <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal body -->

            <div id="loading-view" class="p-6 space-y-6 hidden">
                <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="#E5E7EB" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentColor" />
                </svg>
            </div>

            <div id="modal-user-view" class="p-6 space-y-6">
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-span-2 text-base tracking-wide dark:text-black">
                        <strong>ชื่อผู้ใช้:</strong>
                        <span class="inline-block ml-1">
                            {{ $username }}
                        </span>
                    </div>
                    <div class="col-span-2 text-base tracking-wide dark:text-black">
                        <strong>รหัสนักศึกษา:</strong>
                        <span class="inline-block ml-1">
                            {{ $pid }}
                        </span>
                    </div>
                    <div class="col-span-2 text-base tracking-wide dark:text-black">
                        <strong>อีเมล:</strong>
                        <span class="inline-block ml-1">
                            {{ $email }}
                        </span>
                    </div>
                    <div class="col-span-2 text-base tracking-wide dark:text-black">
                        <strong>ชื่อ :</strong>
                        <span class="inline-block ml-1">
                            {{ $displayname }}
                        </span>
                    </div>
                    <div class="col-span-2 text-base tracking-wide dark:text-black">
                        <strong>ชื่อ (ภาษาอังกฤษ) :</strong>
                        <span class="inline-block ml-1">
                            {{ $firstname_en }}
                        </span>
                    </div>
                    <div class="col-span-2 text-base tracking-wide dark:text-black">
                        <strong>นามสกุล (ภาษาอังกฤษ) :</strong>
                        <span class="inline-block ml-1">
                            {{ $lastname_en }}
                        </span>
                    </div>

                    <div class="text-base tracking-wide dark:text-black">
                        <strong>ห้อง:</strong>
                        <span class="inline-block ml-1">
                            {{ $room }}
                        </span>
                    </div>
                    <div class="text-base tracking-wide dark:text-black">
                        <strong>สาขาวิชา:</strong>
                        <span class="inline-block ml-1">
                            {{ $department }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div
                class="flex items-center justify-end p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="ModalUserView" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    ปิด
                </button>
            </div>
        </form>
    </div>
</div>
