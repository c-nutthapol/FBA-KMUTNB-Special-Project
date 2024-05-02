<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">

        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                    <i class="bi bi-7-circle-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-slate-300">
                    ส่งเล่ม <span class="text-orange-600">
                        @if ($this->term)
                            (หมดเขตการอนุมัติวันที่
                            {{ dateThai($this->term->project_step->book_approval_end ?? '-') }}
                            )
                        @endif
                    </span> </h5>
                {{-- @dd(555) --}}
            </div>

            <div class="mb-3 flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <button type="button" class="btn from-green-500 to-emerald-500 font-medium text-white"
                            wire:target="export" wire:loading.attr="disabled" wire:click="export">
                            <div class="flex flex-row items-center gap-3" wire:target="export"
                                wire:loading.class="hidden">
                                <i class="bi bi-download leading-0"></i>
                                <span class="block">Export</span>
                            </div>
                            {{-- loading --}}
                            <svg aria-hidden="true" role="status" class="inline hidden h-4 w-4 animate-spin text-white"
                                wire:target="export" wire:loading.class.remove="hidden" viewBox="0 0 100 101"
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
                </div>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <select class="select dark:text-slate-300" wire:model='year'>
                        <option value="" class="text-black" selected>
                            ปีการศึกษาทั้งหมด
                        </option>
                        @foreach ($termFilter as $item_term)
                            <option value="{{ $item_term->id }}" class="text-black">
                                {{ $item_term->term }} / {{ $item_term->year }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <select class="select" wire:model='status'>
                            <option value="" selected>
                                สถานะทั้งหมด
                            </option>
                            @foreach ($statusFilter as $item_status)
                                <option value="{{ $item_status->id }}">
                                    {{ $item_status->status }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="bi bi-search text-lg leading-0 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search" class="input pl-10" wire:model="search"
                                placeholder="ค้นหาชื่อโครงการ">
                        </div>
                    </div>
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="bi bi-search text-lg leading-0 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search_name" class="input pl-10" wire:model="search_name"
                                placeholder="ค้นหาชื่อนักศึกษา">
                        </div>
                    </div>
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="bi bi-search text-lg leading-0 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search_id" class="input pl-10" wire:model="search_id"
                                placeholder="ค้นหารหัสนักศึกษา">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-6">
                <div class="overflow-x-auto relative p-0">
                    <table
                        class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600 table-auto">
                        <thead class="align-bottom">
                            <tr class="text-black dark:text-slate-300">
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600 dark:text-slate-300">
                                    ชื่อโครงงาน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600 dark:text-slate-300">
                                    สถานะ
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600 dark:text-slate-300">
                                    นักศึกษา
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600 dark:text-slate-300">
                                    เอกสาร
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600 dark:text-slate-300">
                                    ปีการศึกษา
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600 dark:text-slate-300">
                                    ตัวเลือก
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($projects as $project)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600 ">
                                        <div class="flex flex-row items-center gap-2 w-44 truncate block">
                                            <div
                                                class="flex h-full items-center rounded-1.75 bg-teal-400 p-2.5 text-white dark:bg-slate-700/40 ">
                                                <i
                                                    class="bi bi-folder-fill text-xs leading-0 text-white dark:text-teal-500"></i>
                                            </div>
                                            <h6 class="mb-0 leading-normal text-black dark:text-slate-300">
                                                <div class="transititext-primary text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                                                    data-te-toggle="tooltip" title="{{ $project->name_th }}">
                                                    {{ $project->name_th }}</div>
                                                <span
                                                    class="block text-xs font-normal text-slate-600 dark:text-slate-300 dark:opacity-60">
                                                    {{ $project->name_en }}
                                                </span>
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <div class="inline-block w-44">
                                            <select id="UpdateStatusProject" class="select dark:text-slate-300"
                                                wire:change="$emit('updateStatus',event)"
                                                data-id="{{ $project->id }}">
                                                <option value="" class="text-black" disabled selected>
                                                    {{ $project->master_status->status }}
                                                </option>

                                                @if (Auth::user()->role_id === 2 || Auth::user()->role_id === 3)
                                                    @forelse ($project->SelectOption as $item)
                                                        <option value="{{ $item->id }}" class="text-black">
                                                            {{ $item->status }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                @else
                                                    @forelse ($project->SelectOption as $item)
                                                        <option value="{{ $item->id }}" class="text-black"
                                                            disabled>
                                                            {{ $item->status }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                @endif

                                            </select>
                                        </div>
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row justify-center space-x-4">
                                            <figure class="flex flex-row items-center space-x-2">
                                                <figcaption class="text-black dark:text-slate-300">
                                                    @foreach ($project->StudentListForTable as $item_student)
                                                        {{ $item_student }}<br>
                                                    @endforeach
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        @if (Auth::user()->role_id == 3)
                                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                                wire:click="$emit('eventList',{{ $project->id }},event)"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-green-500 transition-all ease-in hover:text-green-700"
                                                type="button">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-download leading-0"></i>
                                                    <span id="download_doc" class="block">โหลดเอกสาร</span>
                                                </div>
                                            </button>
                                        @elseif (Auth::user()->role_id == 2)
                                            <a href="/storage/{{ $project->files->sortByDesc('created_at')->first()->path ?? '' }}"
                                                download
                                                class="inline-block  font-bold leading-normal text-center text-green-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-green-700">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-download leading-0"></i>
                                                    <span class="block">โหลดเอกสาร</span>
                                                </div>
                                            </a>
                                        @endif
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span
                                            class="text-black dark:text-slate-300">{{ $project->edu_term->term }}/{{ $project->edu_term->year }}</span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                        @if (auth()->user()->role_id == 2)
                                            <div class="flex flex-row justify-end gap-3">
                                                <a href="{{ route('teacher.project.details', ['id' => $project->id]) }}"
                                                    class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-blue-500 transition-all ease-in hover:text-blue-700">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-eye leading-0"></i>
                                                        <span class="block">ดูรายละเอียด</span>
                                                    </div>
                                                </a>
                                                <a href="{{ route('teacher.project.suggestion', ['id' => $project->id]) }}"
                                                    class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-400 transition-all ease-in hover:text-yellow-700">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-chat-dots leading-0"></i>
                                                        <span class="block">เสนอแนะ</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @elseif(auth()->user()->role_id == 3)
                                            <div class="flex flex-row justify-end gap-3">
                                                <a href="{{ route('admin.project.details', ['id' => $project->id]) }}"
                                                    class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-blue-500 transition-all ease-in hover:text-blue-700">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-eye leading-0"></i>
                                                        <span class="block">ดูรายละเอียด</span>
                                                    </div>
                                                </a>
                                                <a href="{{ route('admin.project.suggestion', ['id' => $project->id]) }}"
                                                    class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-400 transition-all ease-in hover:text-yellow-700">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-chat-dots leading-0"></i>
                                                        <span class="block">เสนอแนะ</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-black dark:text-slate-300"> ไม่พบข้อมูล </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                {{ $projects->links() }}
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('updateStatus', event => {
            const id = event.target.getAttribute('data-id');
            const status = event.target.value;
            const selectedText = event.target.options[event.target.selectedIndex].text;

            Swal.fire({
                icon: 'question',
                title: 'คุณต้องการเปลี่ยนสถานะ',
                text: `${selectedText} ใช่หรือไม่`,
                showCancelButton: true,
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.updateStatusProject(id, status);
                }
            })
        })

        Livewire.on('eventList', (key, event) => {
            const mySelect2 = document.getElementById('dropdown');
            mySelect2.classList.toggle("hidden");
            mySelect2.style.transform = `translate(${event.pageX - 300}px, ${event.pageY + 30}px)`;
            console.log(event.pageX, event.pageY)
            Livewire.emit('getDropdownList', key)
        })

        Livewire.on('refreshComponent', e => {
            location.reload();
        })

        window.addEventListener('click', function(e) {
            if (e.target.id != 'download_doc') {
                const mySelect2 = document.getElementById('dropdown');
                if (mySelect2.classList.toggle("hidden") == false) mySelect2.classList.toggle("hidden");
            }
        });
    </script>
@endpush
