<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex flex-col items-start justify-start gap-4 rounded-t-2xl border-b-0 border-b-transparent p-6 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-row items-center space-x-4">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-file-earmark-richtext-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-slate-300">
                        ข่าวสาร
                    </h5>
                </div>
                <a href="{{ route('admin.settings.news.create') }}"
                    class="btn w-full from-blue-500 to-violet-500 text-sm text-white sm:w-auto">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <i class="bi bi-plus-lg leading-0"></i>
                        <span class="block">เพิ่มข่าวสาร</span>
                    </div>
                </a>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <select class="select dark:text-slate-300" wire:model="order_by">
                        <option value="DESC" class="text-black" selected>
                            วันที่ล่าสุด
                        </option>
                        <option value="ASC" class="text-black">
                            วันที่เก่าสุด
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="bi bi-search text-lg leading-0 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search" wire:model="search" class="input pl-10"
                                placeholder="ค้นหา">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-auto flex-wrap p-6">
                <div class="overflow-x-auto p-0">
                    <table
                        class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600">
                        <thead class="align-bottom">
                            <tr class="text-black dark:text-slate-300">
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ลำดับ
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ชื่อข่าว
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ประเภทข่าวสาร
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    วันที่สร้าง
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    สถานะ
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-right align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    รายละเอียด
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($news as $key => $data)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <span class="ml-2 inline-block leading-tight text-black dark:text-slate-300">
                                            {{ $news->firstItem() + $key }}
                                        </span>
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <a href="{{ route('news.view', $data->id) }}">
                                            <p
                                                class="title mb-0 inline-block leading-tight tracking-wide text-black underline hover:cursor-pointer hover:text-blue-500 dark:text-slate-300">
                                                {{ Str::limit($data->title, 40) }}
                                            </p>
                                        </a>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-left align-middle shadow-transparent dark:border-slate-600">
                                        <span class="inline-block leading-tight text-black dark:text-slate-300">
                                            {{ $data->master_new->name }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span class="inline-block leading-tight text-black dark:text-slate-300">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            {{ $data->created_at->thaidate() }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        @if ($data->status == 'active')
                                            <span
                                                class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                Active
                                            </span>
                                        @else
                                            <span
                                                class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-slate-600 to-gray-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                Inactive
                                            </span>
                                        @endif
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row justify-end gap-3">
                                            <a href="{{ route('admin.settings.news.edit', $data->id) }}"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-300 transition-all ease-in hover:text-yellow-500">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-pencil-square leading-0"></i>
                                                    <span class="block">แก้ไข</span>
                                                </div>
                                            </a>
                                            <button type="button"
                                                wire:click="$emit('delete-button','{{ $data->id }}')"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-rose-500 transition-all ease-in hover:text-rose-800">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-trash3 leading-0"></i>
                                                    <span class="block">ลบ</span>
                                                </div>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5"> ไม่พบข้อมูล </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        Livewire.on('delete-button', key => {
            Swal.fire({
                icon: 'info',
                title: 'ลบข้อมูล',
                text: 'คุณต้องการที่จะลบข้อมูลนี้ใช่หรือไม่',
                showCancelButton: true,
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    @this.delete(key);
                }
            })
        })
    </script>
@endpush

