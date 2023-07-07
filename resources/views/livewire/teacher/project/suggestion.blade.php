<div>
    <div class="-mx-3 mb-6 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">
            <div class="inline-block">
                <a href="{{ url()->previous() }}"
                    class="fade-opacity flex flex-row items-center gap-2 text-base font-semibold text-white dark:opacity-80 dark:hover:opacity-100">
                    <i class="bi bi-arrow-left text-xl"></i>
                    <span class="inline-block">
                        กลับ
                    </span>
                </a>
            </div>
        </div>
    </div>

    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">

            {{-- ชื่อโครงงาน --}}
            <div
                class="relative mb-6 flex min-w-0 flex-col items-center justify-start gap-3 break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl sm:flex-row sm:justify-between">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div class="flex h-full items-center rounded-3 bg-teal-400 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-folder-fill text-2xl leading-0 text-white dark:text-teal-400"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-slate-300">
                        <span class="block font-bold">{{ $project->name_th }}</span>
                        <span
                            class="block font-normal text-slate-600 dark:text-slate-300">{{ $project->name_en }}</span>
                    </h5>
                </div>
                <div class="pb-6 sm:p-6">
                    {{-- ถ้าไม่มีเอกสารให้ซ่อน --}}
                    {{-- <a href="/storage/{{$project->files->sortByDesc('created_at')->first()->path ?? ''}}" download class="text-xs text-white btn from-teal-400 to-green-400">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-download leading-0"></i>
                            <span class="block">โหลดเอกสาร</span>
                        </div>
                    </a> --}}
                    <button type="button" data-dropdown-toggle="dropdown"
                        class="btn from-teal-400 to-green-400 text-xs text-white">
                        <div class="flex flex-row items-center gap-3">
                            <i class="bi bi-download leading-0"></i>
                            <span class="block">โหลดเอกสาร</span>
                        </div>
                    </button>
                    <div id="dropdown"
                        class="z-10 hidden w-auto divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-slate-850">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            @forelse ($project->files as $item_file)
                                <li>
                                    @if ($item_file->is_link == 0)
                                        <a href="/storage/{{ $item_file->path ?? '' }}" download
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-800 dark:hover:text-white">{{ $item_file->title }}</a>
                                    @else
                                        <a href="{{ $item_file->path ?? '' }}" target="_blank"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-800 dark:hover:text-white">{{ $item_file->title }}</a>
                                    @endif
                                </li>
                            @empty
                                <li>
                                    ไม่พบไฟล์
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

            {{-- ข้อเสนอแนะ --}}
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
                    <button type="button" class="btn w-full from-blue-500 to-violet-500 text-sm text-white sm:w-auto"
                        data-modal-target="createdModal" data-modal-toggle="createdModal"
                        wire:click="$emit('getSuggestionModalCreate')">
                        <div class="flex flex-row items-center justify-center gap-3">
                            <i class="bi bi-plus-lg leading-0"></i>
                            <span class="block">เพิ่มข้อเสนอแนะ</span>
                        </div>
                    </button>
                </div>
                <div class="flex-auto p-6">
                    <div class="overflow-x-auto p-0">
                        <table
                            class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600">
                            <thead class="align-bottom">
                                <tr class="text-black dark:text-slate-300">
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        ชื่อผู้เสนอแนะ
                                    </th>
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        วันที่
                                    </th>
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-right align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        ตัวเลือก
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $item)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            <h6 class="mb-0 leading-normal dark:text-slate-300">
                                                {{ $item->user->displayname }}
                                            </h6>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                            <span
                                                class="leading-tight text-black dark:text-slate-300">{{ $item->created_at->thaidate() ?? '' }}
                                                {{ date('H:i น.', strtotime($item->created_at)) ?? '' }}</span>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            <div class="flex flex-row items-center justify-end space-x-3">
                                                <button type="button" data-modal-target="editModal"
                                                    data-modal-toggle="editModal"
                                                    wire:click="$emit('getSuggestionModalEdit',{{ $item->id }})"
                                                    class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-300 transition-all ease-in hover:text-yellow-500">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-pencil-square leading-0"></i>
                                                        <span class="block">แก้ไข</span>
                                                    </div>
                                                </button>
                                                <button type="button"
                                                    class="delete-button inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-rose-500 transition-all ease-in hover:text-rose-800"
                                                    data-key="{{ $item->id }}">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-trash3 leading-0"></i>
                                                        <span class="block">ลบ</span>
                                                    </div>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $comments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('closeModalCreate', e => {
            $('button[data-modal-hide="editModal"]').trigger('click');
            location.reload();
        })

        Livewire.on('closeModalEdit', e => {
            $('button[data-modal-hide="editModal"]').trigger('click');
        })

        $('.delete-button').click(function() {
            const key = $(this).data('key')
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

