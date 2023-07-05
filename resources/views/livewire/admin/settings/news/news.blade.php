<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="flex flex-col items-start justify-start gap-4 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-row items-center space-x-4">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="text-2xl text-white bi bi-file-earmark-richtext-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ข่าวสาร
                    </h5>
                </div>
                <a href="{{ route('admin.settings.news.create') }}"
                    class="w-full text-sm text-white btn from-blue-500 to-violet-500 sm:w-auto">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <i class="bi bi-plus-lg leading-0"></i>
                        <span class="block">เพิ่มข่าวสาร</span>
                    </div>
                </a>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <select class="select" wire:model="order_by">
                        <option value="DESC" selected>
                            วันที่ล่าสุด
                        </option>
                        <option value="ASC">
                            วันที่เก่าสุด
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg text-gray-500 bi bi-search leading-0 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search" wire:model="search" class="pl-10 input"
                                placeholder="ค้นหา">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-wrap flex-auto p-6">
                <div class="p-0 overflow-x-auto">
                    <table
                        class="items-center w-full mb-0 tracking-wide align-top border-gray-200 text-slate-500 dark:border-slate-600">
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-base tracking-none text-black opacity-70 dark:border-slate-600">
                                    ลำดับ
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-base tracking-none text-black opacity-70 dark:border-slate-600">
                                    ชื่อข่าว
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-base tracking-none text-black opacity-70 dark:border-slate-600">
                                    ประเภทข่าวสาร
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-base tracking-none text-black opacity-70 dark:border-slate-600">
                                    วันที่สร้าง
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-base tracking-none text-black opacity-70 dark:border-slate-600">
                                    สถานะ
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid whitespace-nowrap text-base tracking-none text-black opacity-70 dark:border-slate-600">
                                    รายละเอียด
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($news as $key => $data)
                                <tr>
                                    <td
                                        class="px-6 py-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                        <span
                                            class="inline-block ml-2 text-xs font-semibold leading-tight text-black dark:text-black">
                                            {{ $news->firstItem() + $key }}
                                        </span>
                                    </td>
                                    <td
                                        class="relative px-6 py-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                        <a href="{{ route('news.view', $data->id) }}">
                                            <p
                                                class="inline-block mb-0 text-xs font-semibold leading-tight tracking-wide underline title text-black hover:cursor-pointer hover:text-blue-500 dark:text-black">
                                                {{ Str::limit($data->title, 40) }}
                                            </p>
                                        </a>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-left align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                            {{ $data->master_new->name }}
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            {{ $data->created_at->thaidate() }}
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                        @if ($data->status == 'active')
                                            <span
                                                class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-blue-500 to-violet-400 align-baseline font-bold uppercase leading-none text-white">
                                                Active
                                            </span>
                                        @else
                                            <span
                                                class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-slate-600 to-gray-400 align-baseline font-bold uppercase leading-none text-white">
                                                Inactive
                                            </span>
                                        @endif
                                    </td>
                                    <td
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b whitespace-nowrap shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row justify-end gap-3">
                                            <a href="{{ route('admin.settings.news.edit', $data->id) }}"
                                                class="inline-block text-sm font-bold leading-normal text-center text-yellow-300 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-500">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-pencil-square leading-0"></i>
                                                    <span class="block">แก้ไข</span>
                                                </div>
                                            </a>
                                            <button type="button"
                                                wire:click="$emit('delete-button','{{ $data->id }}')"
                                                class="inline-block text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in rounded-lg cursor-pointer text-rose-500 hover:text-rose-800">
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
