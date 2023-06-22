<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex flex-col items-start justify-start gap-4 rounded-t-2xl border-b-0 border-b-transparent p-6 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-row items-center space-x-4">
                    <div class="flex h-full items-center rounded-3 bg-yellow-300 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-pencil-square text-2xl leading-0 text-white dark:text-yellow-300"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        แก้ไขข่าวสาร
                    </h5>
                </div>
            </div>

            <div class="flex-auto flex-wrap p-6">
                <form class="flex flex-col gap-3" wire:submit.prevent="submit">
                    <div class="text-center">
                        <div class="mx-auto block max-w-100">
                            @if ($photo)
                                <div class="mb-2">
                                    <img src="{{ $photo->temporaryUrl() }}"
                                        class="mx-auto h-auto w-full rounded-2 object-cover object-center"
                                        alt="Avatar">
                                </div>
                            @else
                                <div class="mb-2">
                                    @if ($cover_img == null)
                                        <div
                                            class="mx-auto mb-2 flex h-34 w-auto items-center justify-center rounded-2 bg-gray-300">
                                            <i class="bi bi-image-alt text-4xl leading-0"></i>
                                        </div>
                                    @else
                                        <img src="{{ Storage::disk('public')->url($cover_img) }}" alt="banner"
                                            class="mx-auto h-auto w-full rounded-2 object-cover object-center">
                                    @endif
                                </div>
                            @endif

                            <input class="input h-full p-0" type="file" wire:model.defer="photo">
                            @error('photo')
                                <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            ชื่อข่าวสาร
                            <span class="text-rose-600">*</span>
                        </label>
                        <input type="text" class="input" placeholder="กรุณากรอกข่าวสาร" required
                            wire:model.defer="title" />
                        @error('title')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            ประเภทข่าวสาร
                            <span class="text-rose-600">*</span>
                        </label>
                        <select class="select" wire:model.defer="masternew_id">
                            <option value="">
                                กรุณาเลือกประเภทข่าวสาร
                            </option>
                            @forelse ($master_news as $master)
                                <option value="{{ $master->id }}" @if ($master->id == $masternew_id) selected @endif>
                                    {{ $master->name }}
                                </option>
                            @empty
                                <option value="" disabled>
                                    ไม่มีข้อมูลกรุณาเพิ่มประเภทข่าวสาร
                                </option>
                            @endforelse
                        </select>
                        @error('masternew_id')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div wire:ignore>
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            รายละเอียดข่าวสาร
                            <span class="text-rose-600">*</span>
                        </label>
                        <textarea class="input h-auto" rows="6" id="editor" wire:model.defer="detail">{{ $detail }}</textarea>
                        @error('detail')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            สถานะข่าวสาร
                        </label>
                        <div class="flex flex-row items-center">
                            <span class="mr-3 text-sm tracking-wide dark:text-white dark:opacity-80">ปิดใช้งาน</span>
                            <label class="relative inline-flex cursor-pointer items-center">
                                <input type="checkbox" value="active" class="peer sr-only" wire:change="changeStatus"
                                    @if ($status == 'active') checked @endif>
                                <div
                                    class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800">
                                </div>
                                <span
                                    class="ml-3 text-sm tracking-wide dark:text-white dark:opacity-80">เปิดใช้งาน</span>
                            </label>
                        </div>
                        @error('*')
                            <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-10 text-end">
                        <a href="{{ route('admin.settings.news.home') }}"
                            class="mr-1 inline-block rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                            ยกเลิก
                        </a>
                        <button type="submit" id="submit" class="btn from-orange-400 to-yellow-400 text-sm font-medium text-white"
                            wire:target="submit" wire:loading.attr="disabled">
                            <div class="flex flex-row items-center gap-3" wire:target="submit"
                                wire:loading.class="hidden">
                                <i class="bi bi-pencil-square text-base leading-0"></i>
                                <span class="block">แก้ไข</span>
                            </div>
                            {{-- loading --}}
                            <svg aria-hidden="true" role="status" class="inline hidden h-4 w-4 animate-spin text-white"
                                wire:target="submit" wire:loading.class.remove="hidden" viewBox="0 0 100 101"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
    </div>
</div>

@push('script')
    <script src="{{ asset('assets/lib/ckeditor5-build-classic/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/lib/ckeditor5-build-classic/translations/th.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: 'th',
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}",
                }
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('detail', editor.getData(), true);
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

