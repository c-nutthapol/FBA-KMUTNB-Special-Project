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
                            ข้อเสนอแนะ
                        </h5>
                    </div>
                    <button type="button" id="btninsert"
                        class="btn w-full from-blue-500 to-violet-500 text-sm text-white sm:w-auto"
                        data-modal-target="createModal" data-modal-toggle="createModal">
                        <div class="flex flex-row items-center justify-center gap-3">
                            <i class="bi bi-plus-lg leading-0"></i>
                            <span class="block">เพิ่มข้อเสนอแนะ</span>
                        </div>
                    </button>
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
                                        ข้อเสนอแนะ
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
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-right align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        รายละเอียด
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
                                            @if ($item->status == 'active')
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                    active
                                                </span>
                                            @endif
                                            @if ($item->status == 'inactive')
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-pink-500 to-rose-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                    inactive
                                                </span>
                                            @endif
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                            <div class="flex flex-row justify-end gap-3">
                                                <button type="button" data-modal-target="editModal"
                                                    data-modal-toggle="editModal"
                                                    wire:click="edit({{ $item->id }},'{{ $item->name }}','{{ $item->status }}')"
                                                    class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-300 transition-all ease-in hover:text-yellow-500">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-pencil-square leading-0"></i>
                                                        <span class="block">แก้ไข</span>
                                                    </div>
                                                </button>
                                                <button type="button" wire:click="$emit('delete',{{ $item->id }})"
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
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div id="createModal" data-modal-backdrop="static" wire:ignore.self tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
        <div class="relative h-full w-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <form class="relative rounded-lg bg-white shadow dark:bg-gray-700" wire:submit.prevent="submit">
                <!-- Modal header -->
                <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-slate-300">
                        <i class="bi bi-plus-lg leading-0"></i> เพิ่มข้อเสนอแนะ
                    </h3>
                    <button type="button"
                        class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="createModal">
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
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                ข้อเสนอแนะ
                            </label>
                            <textarea class="input" wire:model="name" placeholder="กรุณากรอกข้อเสนอแนะ" rows="2"></textarea>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกข้อเสนอแนะ</span> --}}
                        </div>

                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end space-x-2 rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                    <button data-modal-hide="createModal" type="button"
                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                        ยกเลิก
                    </button>
                    <button type="submit" id="submit"
                        class="btn from-blue-500 to-violet-500 text-sm font-medium text-white">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-save-fill leading-0"></i>
                            <span class="block">บันทึก</span>
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

    <!-- Edit Modal -->
    <div id="editModal" data-modal-backdrop="static" wire:ignore.self tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
        <div class="relative h-full w-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <form class="relative rounded-lg bg-white shadow dark:bg-gray-700" wire:submit.prevent="update">
                <!-- Modal header -->
                <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-slate-300">
                        <i class="bi bi-pencil-square leading-0"></i> แก้ไขข้อเสนอแนะ
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
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                ข้อเสนอแนะ
                            </label>
                            <textarea class="input" wire:model="t_name" placeholder="กรุณากรอกข้อเสนอแนะ" rows="2"></textarea>
                            @error('t_name')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                            @enderror
                            {{-- <span class="block mt-1 ml-2 text-sm tracking-wide text-rose-600">กรุณากรอกข้อเสนอแนะ</span> --}}
                        </div>
                        <div class="col-span-2">
                            <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                สถานะ
                            </label>
                            <div class="flex flex-row gap-4">
                                <div class="flex items-center">
                                    <input id="term-1" type="radio" value="active" name="status"
                                        class="input-radio h-4 w-4" wire:model.defer="t_status">
                                    <label for="term-1"
                                        class="dark:opacity-800 ml-2 cursor-pointer text-sm tracking-wide dark:text-slate-300">
                                        active
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="term-2" type="radio" value="inactive" name="status"
                                        class="input-radio h-4 w-4" wire:model.defer="t_status">
                                    <label for="term-2"
                                        class="dark:opacity-800 ml-2 cursor-pointer text-sm tracking-wide dark:text-slate-300">
                                        inactive
                                    </label>
                                </div>
                            </div>
                            @error('status')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                            @enderror

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
                        class="btn from-orange-400 to-yellow-400 text-sm font-medium text-white">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-pencil-square text-base leading-0"></i>
                            <span class="block">แก้ไข</span>
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

@push('script')
    <script>
        document.addEventListener('livewire:load', function() {
            @this.on('delete', (id) => {
                Swal.fire({
                    title: 'คุณต้องการลบข้อมูลนี้หรือไม่?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'ใช่',
                    cancelButtonText: 'ไม่',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.call('delete', id)
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        Swal.fire(
                            'Cancelled',
                            'Your data is safe :)',
                            'error'
                        )
                    }
                })
            })
        })
    </script>
@endpush

