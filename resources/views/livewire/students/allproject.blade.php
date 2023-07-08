<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <h5 class="mb-0 tracking-wide dark:text-slate-300">
                    โครงงานพิเศษทั้งหมด
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <select class="select dark:text-slate-300" wire:model='year'>
                        <option value="" selected class="text-black">
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
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="bi bi-search text-lg leading-0 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search" class="input pl-10" wire:model="search"
                                placeholder="ค้นหา">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-6">
                <div class="overflow-x-auto p-0">
                    <table
                        class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600">
                        <thead class="align-bottom">
                            <tr class="text-black dark:text-slate-300">
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ชื่อโครงงาน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ภาคเรียน/ปีการศึกษา
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    นักศึกษา
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    เอกสาร
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($projects as $project)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row items-center gap-2">
                                            <div
                                                class="flex h-full items-center rounded-1.75 bg-teal-400 p-2.5 text-white dark:bg-slate-700/40">
                                                <i
                                                    class="bi bi-folder-fill text-xs leading-0 text-white dark:text-teal-500"></i>
                                            </div>
                                            <h6 class="mb-0 leading-normal text-black dark:text-slate-300">
                                                {{ $project->name_th }}
                                                <span
                                                    class="block text-xs font-normal text-slate-600 dark:text-slate-300 dark:opacity-60">
                                                    {{ $project->name_en }}
                                                </span>
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span
                                            class="text-black dark:text-slate-300">{{ $project->edu_term->term }}/{{ $project->edu_term->year }}</span>
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
                                        {{-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                            class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-green-500 transition-all ease-in hover:text-green-700"
                                            type="button">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-download leading-0"></i>
                                                <span class="block">โหลดเอกสาร</span>
                                            </div>
                                        </button> --}}
                                        <!-- Dropdown menu -->
                                        {{-- <div id="dropdown"
                                            class="z-10 hidden w-auto divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-slate-850">
                                            <ul class="py-2 text-gray-700 dark:text-slate-300"
                                                aria-labelledby="dropdownDefaultButton">
                                                @forelse ($project->files->sortByDesc('id') as $item_file)

                                                    <li>
                                                        @if ($item_file->is_link == 0)
                                                            <a href="/storage/{{ $item_file->path ?? '' }}" download
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-800 dark:hover:text-white">{{ $item_file->title }}</a>
                                                        @else
                                                            <a href="{{ $item_file->path ?? '' }}" target="_blank"
                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-slate-800 dark:hover:text-white">{{ $item_file->title }}</a>
                                                        @endif
                                                    </li>
                                                    @break
                                                @empty
                                                    <li>
                                                        ไม่พบไฟล์
                                                    </li>
                                                @endforelse
                                            </ul>
                                        </div> --}}
                                        <a href="/storage/{{$project->files->sortByDesc('created_at')->first()->path ?? ''}}" download
                                        class="inline-block dark:text-slate-300 font-bold leading-normal text-center text-green-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-green-700">
                                        <div class="flex flex-row items-center gap-2">
                                            <i class="bi bi-download leading-0"></i>
                                            <span class="block">โหลดเอกสาร</span>
                                        </div>
                                        </a>
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

@endpush

