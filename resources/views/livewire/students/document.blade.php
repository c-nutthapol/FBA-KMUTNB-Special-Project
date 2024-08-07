<div>
    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">
            <div
                class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-cloud-arrow-down-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-slate-300">
                        ดาวน์โหลดแบบฟอร์ม
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="overflow-x-auto p-0">
                        <table
                            class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-black dark:border-slate-600">
                            <thead class="align-bottom">
                                <tr class="text-black dark:text-slate-300">
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        ชื่อเอกสาร
                                    </th>
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        วันที่แนบไฟล์
                                    </th>
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        ดาวน์โหลด
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $files)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600 text-center">
                                        <h6 class="mb-0  leading-normal dark:text-slate-300">
                                            {{ $files->name }}
                                            @if ($files->pin == 'active')
                                            <i class="bi bi-pin-fill text-orange-500"></i>
                                            @endif
                                        </h6>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                            <span
                                                class="inline-block leading-tight text-black dark:text-slate-300">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                {{ dateThai($files->created_at->format("m/d/Y")) }}
                                            </span>
                                        <span
                                            class="ml-2 inline-block leading-tight text-black dark:text-slate-300">
                                            <i class="bi bi-clock-fill"></i> {{  $files->created_at->format("H:i") }}
                                            น.
                                            </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <a href="{{ asset('storage') }}/{{ $files->file }}"
                                           download
                                           class="btn from-blue-500 to-violet-500 text-white">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-download leading-0"></i>
                                                <span class="block">โหลดเอกสาร</span>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

