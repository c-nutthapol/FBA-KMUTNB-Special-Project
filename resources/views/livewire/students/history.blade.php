<div>
    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">

            {{-- ประวัติการส่งคำร้อง --}}
            <div
                class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-clock-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ประวัติการส่งคำร้อง
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="overflow-x-auto p-0">
                        <table
                            class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-black dark:border-slate-600">
                            <thead class="align-bottom">
                                <tr class="text-black dark:text-white">
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        คำร้อง
                                    </th>
                                    <th
                                        class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                        วันที่เขียนคำร้อง
                                    </th>
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
                                @forelse ($this->Request as $request)
                                    <tr>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            <h6 class="mb-0 leading-normal text-black dark:text-white">
                                                {{ $request->master_requests->name }}
                                            </h6>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                            <span
                                                class="inline-block font-semibold leading-tight text-black dark:text-white">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                {{ dateThai($request->create_at) }}
                                            </span>
                                            <span
                                                class="ml-2 inline-block font-semibold leading-tight text-black dark:text-white">
                                                <i class="bi bi-clock-fill"></i> {{ date('H:m', $request->create_at) }}
                                                น.
                                            </span>
                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                            @if (in_array($request->status, [22, 23, 25]))
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-gray-500 to-teal-400 py-1.4 px-2.5 text-center align-baseline font-bold uppercase leading-none tracking-wider text-white">
                                                    รออนุมัติ
                                                </span>
                                            @elseif($request->status == 26)
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-emerald-500 to-teal-400 py-1.4 px-2.5 text-center align-baseline font-bold uppercase leading-none tracking-wider text-white">
                                                    อนุมัติ
                                                </span>
                                            @elseif (in_array($request->status, [24, 27]))
                                                <span
                                                    class="inline-block whitespace-nowrap rounded-1.8 bg-gradient-to-tl from-red-600 to-orange-600 py-1.4 px-2.5 text-center align-baseline font-bold uppercase leading-none tracking-wider text-white">
                                                    ไม่อนุมัติ
                                                </span>
                                            @endif

                                        </td>
                                        <td
                                            class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">

                                            @if (
                                                !$request->modified_at &&
                                                    $request->status == 26 &&
                                                    in_array($request->title, [1, 2, 3]) &&
                                                    Carbon\Carbon::now()->timestamp <= $request->updated_at->addDays($config_day[$request->title])->timestamp)
                                                <button type="button"
                                                    class="btn from-blue-500 to-violet-500 text-white"
                                                    data-modal-target="modalChangeRequest"
                                                    data-modal-toggle="modalChangeRequest"
                                                    onclick="@this.emit('getModal',{{ $request->id }})">
                                                    <div class="flex flex-row items-center gap-3">
                                                        <i class="bi bi-brush-fill leading-0"></i>
                                                        <span class="block">กรอกข้อมูล</span>
                                                    </div>
                                                </button>
                                            @endif
                                            <button type="button" class="btn from-blue-500 to-violet-500 text-white"
                                                data-modal-target="viewModal" data-modal-toggle="viewModal">
                                                <div class="flex flex-row items-center gap-3">
                                                    <i class="bi bi-eye-fill leading-0"></i>
                                                    <span class="block">ดูรายละเอียด</span>
                                                </div>
                                            </button>
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

    <!-- Main modal -->
    <div id="viewModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-990 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
        <div class="relative h-full w-full max-w-2xl md:h-auto">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                        รายละเอียด
                    </h3>
                    <button type="button"
                        class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="viewModal">
                        <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-y-6 p-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25
                        and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-end space-x-2 rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                    <button data-modal-hide="viewModal" type="button"
                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                        ปิด
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

