<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div
                class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                    <i class="text-2xl text-white bi bi-1-circle-fill leading-0 dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    ลงทะเบียนโครงงานพิเศษ
                </h5>
            </div>
            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                <div>
                    <select class="select">
                        <option value="ปีการศึกษาทั้งหมด" selected>
                            ปีการศึกษาทั้งหมด
                        </option>
                        <option value="2566">
                            2566
                        </option>
                        <option value="2565">
                            2565
                        </option>
                        <option value="2564">
                            2564
                        </option>
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <select class="select">
                            <option value="สถานะทั้งหมด" selected>
                                สถานะทั้งหมด
                            </option>
                            <option value="รออนุมัติหัวข้อ">
                                รออนุมัติหัวข้อ
                            </option>
                            <option value="อนุมัติ">
                                อนุมัติ
                            </option>
                            <option value="ไม่อนุมัติ">
                                ไม่อนุมัติ
                            </option>
                        </select>
                    </div>
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
            <div class="flex-auto p-6">
                <div class="p-0 overflow-x-auto">
                    <table
                        class="items-center w-full mb-0 tracking-wide align-top border-gray-200 dark:border-slate-600 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    ชื่อโครงงาน
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    ภาคเรียน/ปีการศึกษา
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    นักศึกษา
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    เอกสาร
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    สถานะ
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
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
                                            <h6 class="mb-0 text-sm leading-normal dark:text-slate-400">
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
                                        <span class="text-sm dark:text-slate-400">1/2566</span>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row justify-center space-x-4">
                                            <figure class="flex flex-row items-center space-x-2">
                                                <img class="object-cover object-center w-8 h-8 rounded-full"
                                                    src="https://images.pexels.com/photos/325531/pexels-photo-325531.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                    alt="avatar" />
                                                <figcaption class="text-sm dark:text-slate-400">
                                                    {{ $project->user_project->where('role', 'student')[0]->user->name ?? '' }}
                                                </figcaption>
                                            </figure>

                                            <figure class="flex flex-row items-center space-x-2">
                                                <img class="object-cover object-center w-8 h-8 rounded-full"
                                                    src="https://images.pexels.com/photos/2887767/pexels-photo-2887767.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                    alt="avatar" />
                                                <figcaption class="text-sm dark:text-slate-400">
                                                    {{ $project->user_project->where('role', 'student')[1]->user->name ?? '' }}
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <a href="#"
                                            class="inline-block text-sm font-bold leading-normal text-center text-green-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-green-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-download leading-0"></i>
                                                <span class="block">โหลดเอกสาร</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="inline-block">
                                            <select class="select">
                                                <option value="รออนุมัติหัวข้อ" selected>
                                                    รออนุมัติหัวข้อ
                                                </option>
                                                <option value="อนุมัติ">
                                                    อนุมัติ
                                                </option>
                                                <option value="ไม่อนุมัติ">
                                                    ไม่อนุมัติ
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                    <td
                                        class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <div class="flex flex-row justify-end gap-3">
                                            <a href="{{ route('teacher.project.details') }}"
                                                class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-eye leading-0"></i>
                                                    <span class="block">ดูรายละเอียด</span>
                                                </div>
                                            </a>
                                            <a href="{{ route('teacher.project.suggestion') }}"
                                                class="inline-block text-sm font-bold leading-normal text-center text-yellow-400 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-700">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-chat-dots leading-0"></i>
                                                    <span class="block">เสนอแนะ</span>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"> ไม่พบข้อมูล </td>
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
