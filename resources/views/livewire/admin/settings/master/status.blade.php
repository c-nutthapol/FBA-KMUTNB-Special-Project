<div>
    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">
            <div
                class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="border-b-solid mb-0 flex flex-col items-start justify-start gap-4 rounded-t-2xl border-b-0 border-b-transparent p-6 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex flex-row items-center space-x-4">
                        <div
                            class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                            <i class="bi bi-chat-dots-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-slate-300">
                            สถานะ
                        </h5>
                    </div>
                    {{-- <button type="button" class="w-full text-sm text-white sm:w-auto btn from-blue-500 to-violet-500"
                        data-modal-target="createModal" data-modal-toggle="createModal">
                        <div class="flex flex-row items-center justify-center gap-3">
                            <i class="bi bi-plus-lg leading-0"></i>
                            <span class="block">เพิ่มสถานะ</span>
                        </div>
                    </button> --}}
                </div>

                <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-end">
                    <div class="flex flex-col gap-3 sm:flex-row">
                        {{-- <div class="flex-1">
                            <select class="select">
                                <option value="หมวดหมู่ทั้งหมด" selected>
                                    หมวดหมู่ทั้งหมด
                                </option>
                                <option value="หัวข้อที่ผิดบ่อย">
                                    หัวข้อที่ผิดบ่อย
                                </option>
                                <option value="การจัดรูปแบบการพิมพ์ที่ผิดบ่อย">
                                    การจัดรูปแบบการพิมพ์ที่ผิดบ่อย
                                </option>
                            </select>
                        </div> --}}
                        {{-- <div class="flex-1">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="text-lg text-gray-500 bi bi-search dark:text-gray-400 leading-0"></i>
                                </div>
                                <input type="text" id="search" wire:model="search" class="pl-10 input" placeholder="ค้นหา">
                            </div>
                        </div> --}}
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
                                        ขั้นตอน
                                    </th>
                                    {{-- <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap  opacity-70">
                                        หมวดหมู่
                                    </th> --}}
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        สถานะ
                                    </th>
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        ผู้เกี่ยวข้อง
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $key => $item)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            <span class="ml-2 inline-block leading-tight text-black dark:text-slate-300">
                                                {{ $data->firstItem() + $loop->index }}
                                            </span>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            <span class="inline-block leading-tight text-black dark:text-slate-300">
                                                {{ $item->name ?? '' }}
                                            </span>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            <span class="inline-block leading-tight text-black dark:text-slate-300">
                                                {{ $item->status ?? '' }}
                                            </span>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            <span class="inline-block leading-tight text-black dark:text-slate-300">
                                                {{ $item->role->name ?? '' }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-black dark:text-slate-300"> ไม่พบข้อมูล </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

</div>

@push('script')
@endpush

