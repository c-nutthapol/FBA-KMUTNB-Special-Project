<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div
                class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                    <i class="text-2xl text-white bi bi-people-fill leading-0 dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    ข้อมูลผู้ใช้งาน
                </h5>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                <div>
                    <select class="select">
                        <option value="เวลาเข้าใช้งานล่าสุด" selected>
                            เวลาเข้าใช้งานล่าสุด
                        </option>
                        <option value="เวลาเข้าใช้งานเก่าสุด">
                            เวลาเข้าใช้งานเก่าสุด
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg text-gray-500 bi bi-search dark:text-gray-400 leading-0"></i>
                            </div>
                            <input type="text" id="search" class="pl-10 input" placeholder="ค้นหา">
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
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    ชื่อ-นามสกุล
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    สถานะ
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    เวลาเข้าใช้งาน
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    รายละเอียด
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td
                                        class="px-6 py-3 align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row items-center gap-2">
                                            <img src="{{ !is_null($user->avatar) && Storage::disk('public')->exists($user->avatar) ? Strorage::disk('public')->url($user->avatar) : asset('assets/img/no_image.jpg') }}"
                                                class="object-cover object-center w-10 h-10 rounded-full"
                                                alt="Avatar">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-slate-400">
                                                {{ $user->name }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        @if ($user->role->name == 'student')
                                            <span
                                                class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-blue-500 to-violet-400 align-baseline font-bold uppercase leading-none text-white">
                                                นักศึกษา
                                            </span>
                                        @endif
                                        @if ($user->role->name == 'teacher')
                                            <span
                                                class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-pink-500 to-rose-400 align-baseline font-bold uppercase leading-none text-white">
                                                อาจารย์
                                            </span>
                                        @endif
                                        @if ($user->role->name == 'admin')
                                            <span
                                                class="py-1.4 px-2.5 text-xs rounded-1.8 inline-block whitespace-nowrap tracking-wider text-center bg-gradient-to-tl from-slate-600 to-gray-400 align-baseline font-bold uppercase leading-none text-white">
                                                ผู้ดูแลลระบบ
                                            </span>
                                        @endif
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            {{ date('d/m/y', strtotime($user->access_time)) }}
                                        </span>
                                        <span
                                            class="inline-block ml-2 text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-clock-fill"></i>
                                            {{ date('H:i น.', strtotime($user->access_time)) }}
                                        </span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <button type="button" data-modal-target="ModalUserView"
                                            data-modal-toggle="ModalUserView"
                                            class="inline-block mr-2 text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700"
                                            wire:click="$emit('getUser',{{ $user->id }})">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-eye leading-0"></i>
                                                <span class="block">ดูรายละเอียด</span>
                                            </div>
                                        </button>
                                        <button type="button" data-modal-target="ModalUserEdit"
                                            data-modal-toggle="ModalUserEdit"
                                            class="inline-block text-sm font-bold leading-normal text-center text-yellow-300 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-pencil-square leading-0"></i>
                                                <span class="block">แก้ไข</span>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4"> ไม่พบข้อมูล </td>
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
