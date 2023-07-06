<div>
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex flex-col items-start justify-start gap-4 p-6 mb-0 border-b-0 sm:items-center sm:justify-between sm:flex-row border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-row items-center space-x-4">
                        <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                            <i class="text-2xl text-white bi bi-chat-dots-fill leading-0 dark:text-blue-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
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

                <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-end sm:flex-row">
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

                <div class="flex-wrap flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 tracking-wide align-top border-gray-200 dark:border-slate-600 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        ลำดับ
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        ขั้นตอน
                                    </th>
                                    {{-- <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        หมวดหมู่
                                    </th> --}}
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        สถานะ
                                    </th>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        ผู้เกี่ยวข้อง
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $key => $item)
                                    <tr>
                                        <td
                                            class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="inline-block ml-2 text-xs font-semibold leading-tight text-black dark:text-black">
                                                {{ $data->firstItem() + $loop->index }}
                                            </span>
                                        </td>
                                        <td
                                            class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                                {{ $item->name ?? '' }}
                                            </span>
                                        </td>
                                        <td
                                            class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                                {{ $item->status ?? '' }}
                                            </span>
                                        </td>
                                        <td
                                            class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                                {{ $item->role->name ?? '' }}
                                            </span>
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
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>


</div>

@push('script')

@endpush
