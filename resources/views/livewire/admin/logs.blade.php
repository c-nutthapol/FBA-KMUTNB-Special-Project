@section('title', $title)

<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                    <i class="bi bi-person-badge-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-slate-300">
                    {{ $title }}
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <select wire:model="order_by" class="select dark:text-slate-300">
                        <option value="DESC" class="text-black">
                            เวลาเข้าใช้งานล่าสุด
                        </option>
                        <option value="ASC" class="text-black">
                            เวลาเข้าใช้งานเก่าสุด
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
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
                                    ชื่อ-นามสกุล
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    IP Address
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    เบราว์เซอร์
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    เวลาเข้าใช้ล่าสุด
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($logs as $log)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row items-center gap-2">
                                            <h6 class="mb-0 leading-normal text-black dark:text-slate-300">
                                                {{ $log->user->fullname_th ?? '-' }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span
                                            class="inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                            {{ $log->ip ?? '-' }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span
                                            class="inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                            {{ $log->browser ?? '-' }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span
                                            class="inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            {{ $log->created_at->thaidate() ?? '-' }}
                                        </span>
                                        <span
                                            class="ml-2 inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                            <i class="bi bi-clock-fill"></i>
                                            {{ $log->created_at->thaidate('H:i:s น.') ?? '-' }}
                                        </span>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-black dark:text-slate-300"> ไม่พบข้อมูล </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                {{ $logs->links() }}
            </div>
        </div>
    </div>
</div>

