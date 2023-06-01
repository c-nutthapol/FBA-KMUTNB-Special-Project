<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                    <i class="bi bi-brush-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    เขียนคำร้องทั่วไป
                </h5>
            </div>
            <div class="flex-auto flex-wrap p-6">
                <form wire:submit.prevent='submit'>
                    <div class="mb-4">
                        {{-- If there is an error, enter the Error class. = label class='... error', select class="... error"  --}}
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            คำร้อง
                            <span class="text-rose-600">*</span>
                        </label>
                        <select class="select" wire:model.defer='form.title'>
                            <option value="" selected disabled>
                                กรุณาเลือกคำร้อง
                            </option>
                            @foreach ($data->petition as $petition)
                                <option value="{{ $petition->id }}">
                                    {{ $petition->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('form.title')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>

                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            หมายเหตุ
                            <span class="text-rose-600">*</span>
                        </label>
                        <textarea class="input h-auto" placeholder="กรุณากรอกหมายเหตุ" rows="6" wire:model.defer="form.desc"></textarea>
                        @error('form.desc')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-10 text-end">
                        <button type="submit" class="btn from-blue-500 to-violet-500 text-sm text-white">
                            <div class="flex flex-row items-center gap-3">
                                <i class="bi bi-send-fill text-base leading-0"></i>
                                <span class="block">ส่งคำร้อง</span>
                            </div>
                            {{-- loading --}}
                            {{-- <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="#E5E7EB" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentColor" />
                                </svg> --}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

