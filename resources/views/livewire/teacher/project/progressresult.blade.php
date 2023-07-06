<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div
                class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                    <i class="text-2xl text-white bi bi-4-circle-fill leading-0 dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    ผลการสอบความก้าวหน้า
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row mb-3">
                <div>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <button type="button" class="text-sm font-medium text-white btn from-green-500 to-emerald-500"
                            wire:target="export" wire:loading.attr="disabled" wire:click="export">
                            <div class="flex flex-row items-center gap-3" wire:target="export"
                                wire:loading.class="hidden">
                                <i class="bi bi-download leading-0"></i>
                                <span class="block">Export</span>
                            </div>
                            {{-- loading --}}
                            <svg aria-hidden="true" role="status" class="hidden inline w-4 h-4 text-white animate-spin"
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

            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                <div>
                    <select class="select" wire:model='year'>
                        <option value="" selected>
                            ปีการศึกษาทั้งหมด
                        </option>
                        @foreach ($termFilter as $item_term)
                            <option value="{{ $item_term->id }}">
                                {{ $item_term->term }} / {{ $item_term->year }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    {{-- <div class="flex-1">
                        <select class="select">
                            <option value="" selected>
                                สถานะทั้งหมด
                            </option>
                            @foreach ($statusFilter as $item_status)
                            <option value="{{$item_status->id}}">
                                {{$item_status->status}}
                            </option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg text-gray-500 bi bi-search dark:text-gray-400 leading-0"></i>
                            </div>
                            <input type="text" id="search" class="pl-10 input" wire:model="search"
                                placeholder="ค้นหา">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-6">
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
                                    ภาคเรียน/ปีการศึกษา
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    นักศึกษา
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    เอกสาร
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    สถานะ
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-base border-b-solid tracking-none whitespace-nowrap text-black opacity-70">
                                    ตัวเลือก
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($projects as $project)
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
                                                {{ $project->name_th }}
                                                <span
                                                    class="block text-xs font-normal text-slate-600 dark:text-white dark:opacity-60">
                                                    {{ $project->name_en }}
                                                </span>
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="text-sm dark:text-black text-black">{{ $project->edu_term->term }}/{{ $project->edu_term->year }}</span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row justify-center space-x-4">
                                            <figure class="flex flex-row items-center space-x-2">
                                                <figcaption class="text-sm dark:text-black text-black">
                                                    @foreach ($project->StudentListForTable as $item_student)
                                                        {{ $item_student }}<br>
                                                    @endforeach
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                            class="inline-block text-sm font-bold leading-normal text-center text-green-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-green-700"
                                            type="button">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-download leading-0"></i>
                                                <span class="block">โหลดเอกสาร</span>
                                            </div>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto dark:bg-slate-850">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                                @forelse ($project->files as $item_file)
                                                <li>
                                                    @if ($item_file->is_link == 0)
                                                    <a href="/storage/{{$item_file->path ?? ''}}" download
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-800 dark:hover:text-white">{{ $item_file->title }}</a>
                                                    @else
                                                    <a href="{{$item_file->path ?? ''}}" target="_blank"
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
                                        {{-- <a href="/storage/{{$project->files->sortByDesc('created_at')->first()->path ?? ''}}" download
                                        class="inline-block text-sm font-bold leading-normal text-center text-green-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-green-700">
                                        <div class="flex flex-row items-center gap-2">
                                            <i class="bi bi-download leading-0"></i>
                                            <span class="block">โหลดเอกสาร</span>
                                        </div>
                                    </a> --}}
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="inline-block">
                                            <select id="UpdateStatusProject" class="select"
                                                data-id="{{ $project->id }}">
                                                <option value="" disabled selected>
                                                    {{ $project->master_status->status }}
                                                </option>
                                                @if (Auth::user()->role_id === 2)
                                                    @forelse ($project->SelectOption as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->status }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                @else
                                                    @forelse ($project->SelectOption as $item)
                                                        <option value="{{ $item->id }}" disabled>
                                                            {{ $item->status }}
                                                        </option>
                                                    @empty
                                                    @endforelse
                                                @endif
                                            </select>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        @if (auth()->user()->role_id == 2)
                                            <div class="flex flex-row justify-end gap-3">
                                                <a href="{{ route('teacher.project.details', ['id' => $project->id]) }}"
                                                    class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-eye leading-0"></i>
                                                        <span class="block">ดูรายละเอียด</span>
                                                    </div>
                                                </a>
                                                <a href="{{ route('teacher.project.suggestion', ['id' => $project->id]) }}"
                                                    class="inline-block text-sm font-bold leading-normal text-center text-yellow-400 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-700">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-chat-dots leading-0"></i>
                                                        <span class="block">เสนอแนะ</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @elseif(auth()->user()->role_id == 3)
                                            <div class="flex flex-row justify-end gap-3">
                                                <a href="{{ route('admin.project.details', ['id' => $project->id]) }}"
                                                    class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <i class="bi bi-eye leading-0"></i>
                                                        <span class="block">ดูรายละเอียด</span>
                                                    </div>
                                                </a>
                                                <a href="{{ route('admin.project.suggestion', ['id' => $project->id]) }}"
                                                    class="inline-block text-sm font-bold leading-normal text-center text-yellow-400 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-700">
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
                                    <td colspan="6" class="text-black"> ไม่พบข้อมูล </td>
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
        $(`#UpdateStatusProject`).on(`change`, function() {
            const label = $(this).find("option:selected")[0].text;
            const id = $(this).data("id");
            const status = $(this).val();
            Swal.fire({
                icon: 'question',
                title: 'คุณต้องการเปลี่ยนสถานะ',
                text: `${label} ใช่หรือไม่`,
                showCancelButton: true,
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    @this.updateStatusProject(id, status);
                }
            })
        })

        Livewire.on('refreshComponent', e => {
            location.reload();
        })
    </script>
@endpush
