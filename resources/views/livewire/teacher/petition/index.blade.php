<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div
                class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                    <i class="text-2xl text-white bi bi-brush-fill leading-0 dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    อนุมัติคำร้องทั่วไป
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                <div>
                    <select class="select" wire:model='sortCreateDate'>
                        <option value="desc" selected>
                            วันที่เขียนคำร้องล่าสุด
                        </option>
                        <option value="asc">
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
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg text-gray-500 bi bi-search dark:text-gray-400 leading-0"></i>
                            </div>
                            <input type="text" id="search" class="pl-10 input" placeholder="ค้นหา"
                                wire:model='search'>
                        </div>
                    </div>
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
                                    ชื่อโครงงาน
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    คำร้อง
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    วันที่เขียนคำร้อง
                                </th>
                                {{-- <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    กรุณาอนุมัติก่อนวันที่
                                </th> --}}
                                @if (auth()->user()->role_id == 2)
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        สถานะของที่ปรึกษา
                                    </th>
                                @endif
                                @if (auth()->user()->role_id == 3)
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                        สถานะของผู้ดูแลระบบ
                                    </th>
                                @endif
                                <th
                                    class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    รายละเอียด
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($studentRequest as $item)
                                <tr>
                                    <td
                                        class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row items-center gap-2">
                                            <div
                                                class="flex items-center h-full p-2.5 rounded-1.75 bg-teal-400 dark:bg-slate-700/40 text-white">
                                                <i
                                                    class="text-xs text-white bi bi-folder-fill leading-0 dark:text-teal-500"></i>
                                            </div>
                                            <h6 class="mb-0 text-sm leading-normal text-black dark:text-black">
                                                {{ $item->project->name_th }}
                                                <span
                                                    class="block text-xs font-normal text-slate-600 dark:text-white dark:opacity-60">New
                                                    {{ $item->project->name_en }}
                                                </span>
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-sm font-bold dark:text-black text-black">{{ $item->NameRequestForTable }}</span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            {{ $item->created_at->thaidate() }}
                                        </span>
                                        <span
                                            class="inline-block ml-2 text-xs font-semibold leading-tight text-black dark:text-black">
                                            <i class="bi bi-clock-fill"></i>
                                            {{ date('H:i น.', strtotime($item->created_at)) }}
                                        </span>
                                    </td>
                                    {{-- <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <span
                                        class="inline-block text-xs font-semibold leading-tight text-black dark:text-black">
                                        <i class="bi bi-calendar2-week-fill"></i> 30/04/2566
                                    </span>
                                </td> --}}
                                    @if (auth()->user()->role_id == 2)
                                        <td
                                            class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent text-black">
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
                                            class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent text-black">
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
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <button type="button" data-modal-target="noteModal"
                                            data-modal-toggle="noteModal"
                                            wire:click="$emit('getPetitionModalEdit',{{ $item->id }})"
                                            class="inline-block mr-2 text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-brush leading-0"></i>
                                                <span class="block">จัดการคำร้อง</span>
                                            </div>
                                        </button>
                                        @if (auth()->user()->role_id == 2)
                                            <a href="{{ route('teacher.project.details', ['id' => $item->project]) }}"
                                                target="_blank"
                                                class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-eye leading-0"></i>
                                                    <span class="block">ดูโครงงาน</span>
                                                </div>
                                            </a>
                                        @elseif(auth()->user()->role_id == 3)
                                            <a href="{{ route('admin.project.details', ['id' => $item->project]) }}"
                                                target="_blank"
                                                class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
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
