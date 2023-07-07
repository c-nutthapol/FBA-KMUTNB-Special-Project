<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                    <i class="bi bi-brush-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-slate-300">
                    เขียนคำร้องทั่วไป
                </h5>
            </div>
            <div class="flex-auto flex-wrap p-6">
                <form wire:submit.prevent='submit'>
                    <div class="mb-4">
                        {{-- If there is an error, enter the Error class. = label class='... error', select class="... error"  --}}
                        <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                            คำร้อง
                            <span class="text-rose-600">*</span>
                        </label>
                        <select class="select dark:text-slate-300" wire:model.defer='form.title'>
                            <option value="" class="text-black" selected disabled>
                                กรุณาเลือกคำร้อง
                            </option>
                            @foreach ($data->petition as $petition)
                                <option value="{{ $petition->id }}" class="text-black">
                                    {{ $petition->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('form.title')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>

                        <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                            หมายเหตุ
                            <span class="text-rose-600">*</span>
                        </label>
                        <textarea class="input h-auto" placeholder="กรุณากรอกหมายเหตุ" rows="6" wire:model.defer="form.desc"></textarea>
                        @error('form.desc')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-10 text-end">
                        <button type="submit" class="btn from-blue-500 to-violet-500 text-sm text-white"
                            wire:loading.remove>
                            <div class="flex flex-row items-center gap-3">
                                <i class="bi bi-send-fill text-base leading-0"></i>
                                <span class="block">ส่งคำร้อง</span>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

