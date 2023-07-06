<div id="editModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full"
    wire:ignore.self>
    <div class="relative h-full w-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <form class="relative rounded-lg bg-white shadow dark:bg-gray-700" wire:submit.prevent="submit">
            <!-- Modal header -->
            <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-slate-300">
                    <i class="bi bi-pencil-square leading-0"></i> แก้ไขภาคเรียน
                </h3>
                <button type="button"
                    class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="editModal">
                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
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
                <div id="loading-edit" class="hidden space-y-6 p-6">
                    <svg aria-hidden="true" role="status" class="inline h-4 w-4 animate-spin text-white"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="#E5E7EB" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div id="modal-proeject-step-edit" class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                            ภาคเรียน/ปีการศึกษา
                        </label>
                        <div class="flex flex-row gap-4">
                            @foreach ($edu_terms as $key => $edu_term)
                                <div class="flex items-center">
                                    <input id="term-{{ $key }}" type="radio" value="{{ $edu_term->id }}"
                                        name="edu_term_id" wire:model.defer="edu_term_id" class="input-radio h-4 w-4">
                                    <label for="term-{{ $key }}"
                                        class="ml-2 cursor-pointer text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                        {{ $edu_term->term }}/{{ $edu_term->year }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @error('edu_term_id')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <h4 class="mb-0 text-base tracking-wide dark:text-slate-300 dark:opacity-80">
                            ขั้นตอนการทำงาน
                        </h4>
                    </div>
                    <div class="col-span-2 rounded-lg bg-gray-100 p-3 dark:bg-gray-800">
                        <div class="mb-2 flex items-center">
                            <input id="steps-1" type="checkbox" wire:model.defer="phase_1_status"
                                class="input-checkbox h-4 w-4">
                            <label for="steps-1"
                                class="ml-2 text-base tracking-wide dark:text-slate-300 dark:opacity-80">สอบหัวข้อ</label>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่เริ่ม
                                </label>
                                <input type="date" wire:model.defer="phase_1_start_date" class="input" />
                                @error('phase_1_start_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่สิ้นสุด
                                </label>
                                <input type="date" wire:model.defer="phase_1_end_date" class="input" />
                                @error('phase_1_end_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-span-2 rounded-lg bg-gray-100 p-3 dark:bg-gray-800">
                        <div class="mb-2 flex items-center">
                            <input id="steps-2" type="checkbox" wire:model.defer="phase_2_status"
                                class="input-checkbox h-4 w-4">
                            <label for="steps-2"
                                class="ml-2 text-base tracking-wide dark:text-slate-300 dark:opacity-80">ยื่นขอสอบความก้าวหน้า</label>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่เริ่ม
                                </label>
                                <input type="date" class="input" wire:model.defer="phase_2_start_date" />
                                @error('phase_2_start_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่สิ้นสุด
                                </label>
                                <input type="date" wire:model.defer="phase_2_end_date" class="input" />
                                @error('phase_2_end_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-span-2 rounded-lg bg-gray-100 p-3 dark:bg-gray-800">
                        <div class="mb-2 flex items-center">
                            <input id="steps-3" type="checkbox" wire:model.defer="phase_3_status"
                                class="input-checkbox h-4 w-4">
                            <label for="steps-3"
                                class="ml-2 text-base tracking-wide dark:text-slate-300 dark:opacity-80">ยื่นขอสอบป้องกัน</label>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่เริ่ม
                                </label>
                                <input type="date" class="input" wire:model.defer="phase_3_start_date" />
                                @error('phase_3_start_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่สิ้นสุด
                                </label>
                                <input type="date" class="input" wire:model.defer="phase_3_end_date" />
                                @error('phase_3_end_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 rounded-lg bg-gray-100 p-3 dark:bg-gray-800">
                        <div class="mb-2 flex items-center">
                            <input id="steps-4" type="checkbox" wire:model.defer="phase_4_status"
                                class="input-checkbox h-4 w-4">
                            <label for="steps-4"
                                class="ml-2 text-base tracking-wide dark:text-slate-300 dark:opacity-80">ส่งเล่ม</label>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่เริ่ม
                                </label>
                                <input type="date" class="input" wire:model.defer="phase_4_start_date" />
                                @error('phase_4_start_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-1 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    วันที่สิ้นสุด
                                </label>
                                <input type="date" id="edit_phase_4_end_date" class="input"
                                    wire:model.defer="phase_4_end_date" />
                                @error('phase_4_end_date')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div
                class="flex items-center justify-end space-x-2 rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                <button data-modal-hide="editModal" type="button"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                    ยกเลิก
                </button>
                <button type="submit" id="editsubmit"
                    class="btn from-orange-400 to-yellow-400 text-sm font-medium text-white" wire:target="submit"
                    wire:loading.attr="disabled">
                    <div class="flex flex-row items-center gap-3" wire:target="submit" wire:loading.class="hidden">
                        <i class="bi bi-pencil-square text-base leading-0"></i>
                        <span class="block">แก้ไข</span>
                    </div>
                    {{-- loading --}}
                    <svg aria-hidden="true" role="status" class="inline hidden h-4 w-4 animate-spin text-white"
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

