<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                    <i class="bi bi-person-fill-gear text-2xl leading-0 text-white dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-slate-300">
                    กำหนดสิทธิ์ผู้ใช้งาน
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-between">
                <div>

                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <select class="select dark:text-slate-300" wire:model="role">
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
                    <div class="flex-1">
                        <select class="select dark:text-slate-300" wire:model="status">
                            <option value="" class="text-black">
                                สถานะทั้งหมด
                            </option>
                            <option value="active" class="text-black">
                                ใช้งานปกติ
                            </option>
                            <option value="inactive" class="text-black">
                                ระงับการใช้งาน
                            </option>
                            <option value="wait" class="text-black">
                                รอดำเนินการ
                            </option>
                        </select>
                    </div>
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
                                    วันที่เริ่มใช้งาน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    สิทธิ์ผู้ใช้งาน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    สถานะ
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    คำขออนุมัติใช้สิทธิ์แอดมิน
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
                                            <h6 class="mb-0 leading-normal dark:text-slate-300">
                                                {{ $user->fullname_th }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        @if ($user->log)
                                            <span
                                                class="inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                {{ $user->log->created_at->thaidate() }}
                                            </span>
                                        @else
                                            <span
                                                class="inline-block font-semibold leading-tight text-black dark:text-slate-300">
                                                ไม่พบข้อมูล
                                            </span>
                                        @endif
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <div class="inline-block">
                                            <select class="select confirm-alert" data-id="{{ $user->id }}"
                                                data-type="สิทธิ์ผู้ใช้งาน">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}"
                                                        @if ($role->id == $user->role_id) selected @endif>
                                                        {{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <div class="inline-block">
                                            <select class="select confirm-alert dark:text-slate-300" data-type="สถานะ"
                                                data-id="{{ $user->id }}">
                                                <option value="active" class="text-black"
                                                    @if ($user->status == 'active') selected @endif>
                                                    ใช้งานปกติ
                                                </option>
                                                <option value="inactive" class="text-black"
                                                    @if ($user->status == 'inactive') selected @endif>
                                                    ระงับการใช้งาน
                                                </option>
                                                <option value="wait" class="text-black"
                                                    @if ($user->status == 'wait') selected @endif>
                                                    รอดำเนินการ
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <div class="inline-block">
                                            @if ($user->roleChangeAdmin && $user->roleChangeAdmin->status == 'wait')
                                                <select class="select confirm-alert dark:text-slate-300"
                                                    data-type="คำขออนุมัติใช้สิทธิ์แอดมิน"
                                                    data-id="{{ $user->id }}">
                                                    <option value="" class="text-black">
                                                        กรุณาเลือก
                                                    </option>
                                                    <option value="active" class="text-black"
                                                        @if ($user->roleChangeAdmin->status == 'active') selected @endif>
                                                        อนุมัติ
                                                    </option>
                                                    <option value="inactive" class="text-black"
                                                        @if ($user->roleChangeAdmin->status == 'inactive') selected @endif>
                                                        ไม่อนุมัติ
                                                    </option>
                                                </select>
                                            @endif

                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                        <button type="button" data-modal-target="ModalUserView"
                                            data-modal-toggle="ModalUserView"
                                            class="inline-block cursor-pointer rounded-lg text-center align-middle text-sm font-bold uppercase leading-normal text-blue-500 transition-all ease-in hover:text-blue-700"
                                            onclick="@this.emit('getUserView',{{ $user->id }})">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-eye leading-0"></i>
                                                <span class="block">ดูรายละเอียด</span>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-black dark:text-slate-300"> ไม่พบข้อมูล </td>
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
        $('.confirm-alert').on('change', function() {
            let type = $(this).data('type');
            let value = $(this).val();
            let user_id = $(this).data('id');
            let lable = $(this).find('option:selected').text();
            console.log(value);
            if (value != null && value != '') {
                Swal.fire({
                    title: `คุณต้องการเปลี่ยน${type} ?`,
                    text: `เป็น ${lable} ใช่หรือไม่`,
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'ยืนยัน',
                    cancelButtonText: 'ยกเลิก',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        if (type == 'สิทธิ์ผู้ใช้งาน') {
                            @this.changeRole(user_id, value)
                        } else if (type == 'สถานะ') {
                            @this.changeStatus(user_id, value)
                        } else if (type == 'คำขออนุมัติใช้สิทธิ์แอดมิน') {
                            @this.changeRoleAdmin(user_id, value)
                        }
                    }
                })
            }
        });

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

