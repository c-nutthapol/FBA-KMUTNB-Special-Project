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
                    อนุมัติคำร้องทั่วไป
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <select class="select dark:text-white" wire:model='sortCreateDate'>
                        <option value="desc" class="text-black" selected>
                            วันที่เขียนคำร้องล่าสุด
                        </option>
                        <option value="asc" class="text-black">
                            วันที่เขียนคำร้องเก่าสุด
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    {{-- <div class="flex-1">
                        <select class="select">
                            <option value="สถานะทั้งหมด" selected>
                                สถานะทั้งหมด
                            </option>
                            <option value="รออนุมัติ">
                                รออนุมัติ
                            </option>
                            <option value="อนุมัติ">
                                อนุมัติ
                            </option>
                            <option value="ไม่อนุมัติ">
                                ไม่อนุมัติ
                            </option>
                        </select>
                    </div> --}}
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="bi bi-search text-lg leading-0 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search" class="input pl-10" placeholder="ค้นหา"
                                wire:model='search'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-auto flex-wrap p-6">
                <div class="overflow-x-auto p-0">
                    <table
                        class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600">
                        <thead class="align-bottom">
                            <tr class="text-black dark:text-white">
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ชื่อโครงงาน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    คำร้อง
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    วันที่เขียนคำร้อง
                                </th>
                                {{-- <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap  opacity-70">
                                    กรุณาอนุมัติก่อนวันที่
                                </th> --}}
                                @if (auth()->user()->role_id == 2)
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        สถานะของที่ปรึกษา
                                    </th>
                                @endif
                                @if (auth()->user()->role_id == 3)
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        สถานะของผู้ดูแลระบบ
                                    </th>
                                @endif
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-right align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    รายละเอียด
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($studentRequest as $item)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row items-center gap-2">
                                            <div
                                                class="flex h-full items-center rounded-1.75 bg-teal-400 p-2.5 text-white dark:bg-slate-700/40">
                                                <i
                                                    class="bi bi-folder-fill text-xs leading-0 text-white dark:text-teal-500"></i>
                                            </div>
                                            <h6 class="mb-0 leading-normal text-black dark:text-white">
                                                {{ $item->project->name_th }}
                                                <span
                                                    class="block text-xs font-normal text-slate-600 dark:text-white dark:opacity-60">New
                                                    {{ $item->project->name_en }}
                                                </span>
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span class="text-black dark:text-white">{{ $item->NameRequestForTable }}</span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span class="inline-block leading-tight text-black dark:text-white">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            {{ $item->created_at->thaidate() }}
                                        </span>
                                        <span class="ml-2 inline-block leading-tight text-black dark:text-white">
                                            <i class="bi bi-clock-fill"></i>
                                            {{ date('H:i น.', strtotime($item->created_at)) }}
                                        </span>
                                    </td>
                                    {{-- <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <span
                                        class="inline-block text-xs font-semibold leading-tight text-black dark:text-white">
                                        <i class="bi bi-calendar2-week-fill"></i> 30/04/2566
                                    </span>
                                </td> --}}
                                    @if (auth()->user()->role_id == 2)
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle text-black shadow-transparent dark:border-slate-600">
                                            {!! $item->StatusRequestForTable !!}
                                            {{-- <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-500 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                        รออนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-blue-500 to-violet-400 align-baseline font-bold uppercase leading-none text-white">
                                        อนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-rose-400 align-baseline font-bold uppercase leading-none text-white">
                                        ไม่อนุมัติ
                                    </span> --}}
                                        </td>
                                    @endif
                                    @if (auth()->user()->role_id == 3)
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle text-black shadow-transparent dark:border-slate-600">
                                            {!! $item->StatusRequestForTable !!}
                                            {{-- <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-gray-500 to-slate-400 align-baseline font-bold uppercase leading-none text-white">
                                        รออนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-blue-500 to-violet-400 align-baseline font-bold uppercase leading-none text-white">
                                        อนุมัติ
                                    </span>
                                    <span
                                        class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-rose-400 align-baseline font-bold uppercase leading-none text-white">
                                        ไม่อนุมัติ
                                    </span> --}}
                                        </td>
                                    @endif
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                        <button type="button" data-modal-target="noteModal"
                                            data-modal-toggle="noteModal"
                                            wire:click="$emit('getPetitionModalEdit',{{ $item->id }})"
                                            class="mr-2 inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-blue-500 transition-all ease-in hover:text-blue-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-brush leading-0"></i>
                                                <span class="block">จัดการคำร้อง</span>
                                            </div>
                                        </button>
                                        @if (auth()->user()->role_id == 2)
                                            <a href="{{ route('teacher.project.details', ['id' => $item->project]) }}"
                                                target="_blank"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-blue-500 transition-all ease-in hover:text-blue-700">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-eye leading-0"></i>
                                                    <span class="block">ดูโครงงาน</span>
                                                </div>
                                            </a>
                                        @elseif(auth()->user()->role_id == 3)
                                            <a href="{{ route('admin.project.details', ['id' => $item->project]) }}"
                                                target="_blank"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-blue-500 transition-all ease-in hover:text-blue-700">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-eye leading-0"></i>
                                                    <span class="block">ดูโครงงาน</span>
                                                </div>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $studentRequest->links() }}
                {{-- <div class="flex justify-end mt-4">
                    <nav aria-label="Page navigation">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center w-8 h-8 ml-0 text-sm leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="z-10 flex items-center justify-center w-8 h-8 text-sm leading-tight text-white bg-blue-500 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                    1
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center w-8 h-8 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    2
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center w-8 h-8 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    3
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center w-8 h-8 text-sm leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div> --}}
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('refreshComponent', e => {
            location.reload();
        })
    </script>
@endpush

