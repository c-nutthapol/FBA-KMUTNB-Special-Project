<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                    <i class="bi bi-people-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    ข้อมูลผู้ใช้งาน
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <select wire:model="role" class="select dark:text-white" id="role">
                        <option value="" class="text-black">
                            สิทธิ์ผู้ใช้งานทั้งหมด
                        </option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" class="text-black">
                                {{ $role->name }}
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

            <div class="flex-auto flex-wrap p-6">
                <div class="overflow-x-auto p-0">
                    <table id="table"
                        class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600">
                        <thead class="align-bottom">
                            <tr class="text-black dark:text-white">
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ชื่อ-นามสกุล
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    บทบาท
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    เวลาเข้าใช้งาน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-right align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    รายละเอียด
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row items-center gap-2">
                                            <h6 class="mb-0 leading-normal dark:text-white">
                                                {{ $user->fullname_th }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        @php
                                            $class = [
                                                'student' => 'class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-blue-500 to-violet-400 align-baseline font-bold uppercase leading-none text-white"',
                                                'teacher' => 'class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-rose-400 align-baseline font-bold uppercase leading-none text-white"',
                                                'admin' => 'class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-slate-600 to-gray-400 align-baseline font-bold uppercase leading-none text-white"',
                                                'external' => 'class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-rose-400 align-baseline font-bold uppercase leading-none text-white"',
                                            ];
                                        @endphp
                                        <span {!! $class[$user->role->guard] !!}>
                                            {{ $user->role->name }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        @if ($user->log)
                                            <span class="inline-block leading-tight text-black dark:text-white">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                {{ $user->log->updated_at->thaidate() }}
                                            </span>
                                            <span class="ml-2 inline-block leading-tight text-black dark:text-white">
                                                <i class="bi bi-clock-fill"></i>
                                                {{ $user->log->updated_at->thaidate('H:i:s') }}
                                            </span>
                                        @else
                                            <span class="inline-block leading-tight text-black dark:text-white">
                                                ไม่พบข้อมูล
                                            </span>
                                        @endif

                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                        <button type="button" data-modal-target="ModalUserView"
                                            data-modal-toggle="ModalUserView"
                                            class="mr-2 inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-blue-500 transition-all ease-in hover:text-blue-700"
                                            onclick="@this.emit('getUserView',{{ $user->id }})">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-eye leading-0"></i>
                                                <span class="block">ดูรายละเอียด</span>
                                            </div>
                                        </button>
                                        @if (false)
                                            <button type="button" data-modal-target="ModalUserEdit"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-300 transition-all ease-in hover:text-yellow-500"
                                                data-modal-toggle="ModalUserEdit"
                                                wire:click="$emit('getUserEdit',{{ $user->id }})">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-pencil-square leading-0"></i>
                                                    <span class="block">แก้ไข</span>
                                                </div>
                                            </button>
                                        @endif

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-black dark:text-white"> ไม่พบข้อมูล </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.hook('message.sent', (message, component) => {
            if (message.updateQueue[0].payload.event === 'getUserView') {
                $('#loading-view').removeClass('hidden');
                $('#modal-user-view').addClass('hidden');
            }
            if (message.updateQueue[0].payload.event === 'getUserEdit') {
                $('#loading-edit').removeClass('hidden');
                $('#modal-user-edit').addClass('hidden');
            }
        });

        Livewire.hook('message.processed', (message, component) => {
            if (message.updateQueue[0].payload.event === 'getUserView') {
                $('#loading-view').addClass('hidden');
                $('#modal-user-view').removeClass('hidden');
            }
            if (message.updateQueue[0].payload.event === 'getUserEdit') {
                $('#loading-edit').addClass('hidden');
                $('#modal-user-edit').removeClass('hidden');
            }
        });
    </script>
@endpush

