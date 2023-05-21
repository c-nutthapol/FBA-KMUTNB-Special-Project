<div id="createModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full"
    wire:ignore.self>
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" wire:submit.prevent="submit">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                    <i class="bi bi-plus-lg leading-0"></i> เพิ่มภาคเรียน
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="createModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">ยกเลิก</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6">
                <div id="loading-create" class="p-6 space-y-6 hidden">
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

                <div id="modal-term-create" class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            ภาคเรียน
                        </label>
                        <div class="flex flex-row gap-4">
                            <div class="flex items-center">
                                <input id="term-1" type="radio" value="1" name="term"
                                    class="w-4 h-4 input-radio" wire:model.defer="term">
                                <label for="term-1"
                                    class="ml-2 text-sm tracking-wide cursor-pointer dark:text-white dark:opacity-800">
                                    1
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="term-2" type="radio" value="2" name="term"
                                    class="w-4 h-4 input-radio" wire:model.defer="term">
                                <label for="term-2"
                                    class="ml-2 text-sm tracking-wide cursor-pointer dark:text-white dark:opacity-800">
                                    2
                                </label>
                            </div>
                        </div>
                        @error('term')
                            <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="col-span-2">
                        <label class="mb-1 text-sm tracking-wide dark:text-white dark:opacity-80">
                            ปีการศึกษา
                        </label>
                        <input type="number" class="input" placeholder="กรุณากรอกปีการศึกษา"
                            wire:model.defer="year" />
                        @error('year')
                            <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="mb-1 text-sm tracking-wide dark:text-white dark:opacity-80">
                            วันที่เริ่มภาคเรียน
                        </label>
                        <input type="date" class="input" wire:model.defer="start_date" />
                        @error('start_date')
                            <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="mb-1 text-sm tracking-wide dark:text-white dark:opacity-80">
                            วันที่จบภาคเรียน
                        </label>
                        <input type="date" class="input" wire:model.defer="end_date" />
                        @error('end_date')
                            <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div
                class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="createModal" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    ยกเลิก
                </button>
                <button type="submit" class="text-sm font-medium text-white btn from-blue-500 to-violet-500"
                    wire:target="submit" wire:loading.attr="disabled">
                    <div class="flex flex-row items-center gap-3" wire:target="submit" wire:loading.class="hidden">
                        <i class="bi bi-save-fill leading-0"></i>
                        <span class="block">บันทึก</span>
                    </div>
                    {{-- loading --}}
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin hidden"
                        wire:target="submit" wire:loading.class.remove="hidden">
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="#E5E7EB" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>
