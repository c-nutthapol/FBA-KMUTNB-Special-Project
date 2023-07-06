<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex flex-col items-start justify-start gap-4 rounded-t-2xl border-b-0 border-b-transparent p-6 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-row items-center space-x-4">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-chat-dots-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-slate-300">
                        แบนเนอร์
                    </h5>
                </div>
                <button type="button" id="btninsert"
                    class="btn w-full from-blue-500 to-violet-500 text-sm text-white sm:w-auto"
                    data-modal-target="createModal" data-modal-toggle="createModal">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <i class="bi bi-plus-lg leading-0"></i>
                        <span class="block">เพิ่มแบนเนอร์</span>
                    </div>
                </button>
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
                                    รูปภาพ
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    สถานะ
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    วันที่สร้าง
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-right align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    รายละเอียด
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banners as $key => $banner)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <span class="ml-2 inline-block leading-tight text-black dark:text-slate-300">
                                            {{ $banners->firstItem() + $key }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">

                                        {{-- <img src="/storage/{{$cover_img}}" --}}
                                        <img src="/storage/{{ $banner->img }}" alt="banner"
                                            class="h-24 w-auto rounded-lg object-cover">
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <div class="w-32">
                                            <select class="select dark:text-slate-300"
                                                onchange="@this.ChangeStatus({{ $banner->id }})">
                                                <option value="เปิดใช้งาน" class="text-black"
                                                    @if ($banner->status == 1) selected @endif>
                                                    เปิดใช้งาน
                                                </option>
                                                <option value="ปิดใช้งาน" class="text-black"
                                                    @if ($banner->status == 0) selected @endif>
                                                    ปิดใช้งาน
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span class="inline-block leading-tight text-black dark:text-slate-300">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            {{ $banner->created_at->thaidate('j F Y H:i:s') }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row justify-end gap-3">
                                            <button type="button" data-modal-target="editModal"
                                                data-modal-toggle="editModal"
                                                wire:click="$emit('getBannersEdit',{{ $banner->id }})"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-300 transition-all ease-in hover:text-yellow-500">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-pencil-square leading-0"></i>
                                                    <span class="block">แก้ไข</span>
                                                </div>
                                            </button>
                                            <button type="button"
                                                wire:click="$emit('delete-button','{{ $banner->id }}')"
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
                {{ $banners->links() }}
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

