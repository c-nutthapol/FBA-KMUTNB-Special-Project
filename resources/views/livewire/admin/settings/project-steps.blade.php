<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div
                class="flex flex-col items-start justify-start gap-4 p-6 mb-0 border-b-0 sm:items-center sm:justify-between sm:flex-row border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex flex-row items-center space-x-4">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-list-ol leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ขั้นตอนโครงงาน
                    </h5>
                </div>
                <button type="button" class="w-full text-sm text-white sm:w-auto btn from-blue-500 to-violet-500"
                        data-modal-target="createModal" data-modal-toggle="createModal"
                        wire:click="$emit('getProjectStepCreate')">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <i class="bi bi-plus-lg leading-0"></i>
                        <span class="block">เพิ่มขั้นตอนโครงงาน</span>
                    </div>
                </button>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-end sm:flex-row">
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
                                ภาคเรียน/ปีการศึกษา
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                วันที่เริ่มภาคเรียน - วันที่จบภาคเรียน
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                ขั้นตอนการทำงาน
                            </th>
                            <th
                                class="px-6 py-3 font-bold text-right uppercase align-middle bg-transparent border-b border-gray-200 shadow-none dark:border-slate-600 text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                รายละเอียด
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($project_steps as $project_step)
                            @php
                                $phase_title = [
                                    'phase_1_status' => 'สอบหัวข้อ',
                                    'phase_2_status' => 'ยื่นขอสอบความก้าวหน้า',
                                    'phase_3_status' => 'ยื่นขอสอบป้องกัน',
                                    'phase_4_status' => 'ส่งเล่ม',
                                ];
                                $arr = $project_step->toArray();
                                $workflow = [];
                                $start_end_date = [];
                                for ($i = 1; $i <= 4; $i++) {
                                    if ($arr['phase_' . $i . '_status']) {
                                        $workflow[] = $phase_title['phase_' . $i . '_status'];
                                        $start_end_date[] =
                                            ' <span
                                        class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                        <i class="bi bi-calendar2-week-fill"></i> ' .
                                            thaidate('j F Y', strtotime($arr['phase_' . $i . '_start_date'])) .
                                            '</span>
                                            <span
                                                class="inline-block mx-1 text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                -
                                            </span>
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-calendar2-week-fill"></i> ' .
                                            thaidate('j F Y', strtotime($arr['phase_' . $i . '_end_date'])) .
                                            '</span>';
                                    }
                                }

                            @endphp
                            <tr>
                                <td
                                    class="px-6 py-3 text-left align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            {{ $project_step->edu_term->term }} / {{ $project_step->edu_term->year }}
                                        </span>
                                </td>
                                <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    {!! implode(', ', $start_end_date) !!}
                                </td>

                                <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            {{ implode(', ', $workflow) }}
                                        </span>
                                </td>
                                <td
                                    class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <div class="flex flex-row justify-end gap-3">
                                        <button type="button" data-modal-target="editModal"
                                                data-modal-toggle="editModal"
                                                wire:click="$emit('getProjectStepEdit',{{ $project_step->id }})"
                                                class="inline-block text-sm font-bold leading-normal text-center text-yellow-300 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-pencil-square leading-0"></i>
                                                <span class="block">แก้ไข</span>
                                            </div>
                                        </button>
                                        <button type="button"
                                                class="inline-block text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in rounded-lg cursor-pointer text-rose-500 hover:text-rose-800"
                                                wire:click="$emit('delete-button','{{ $project_step->id }}')">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-trash3 leading-0"></i>
                                                <span class="block">ลบ</span>
                                            </div>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"> ไม่พบข้อมูล</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                {{ $project_steps->links() }}
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.hook('message.sent', (message, component) => {
            if (message.updateQueue[0].payload.event === 'getProjectStepCreate') {
                $('#loading-create').removeClass('hidden');
                $('#modal-project-step-create').addClass('hidden');
            }
            if (message.updateQueue[0].payload.event === 'getProjectStepEdit') {
                $('#loading-edit').removeClass('hidden');
                $('#modal-project-step-edit').addClass('hidden');
            }
        });

        Livewire.hook('message.processed', (message, component) => {
            if (message.updateQueue[0].payload.event === 'getProjectStepCreate') {
                $('#loading-create').addClass('hidden');
                $('#modal-project-step-create').removeClass('hidden');
            }
            if (message.updateQueue[0].payload.event === 'getProjectStepEdit') {
                $('#loading-edit').addClass('hidden');
                $('#modal-project-step-edit').removeClass('hidden');
            }
        });

        Livewire.on('delete-button', key => {
            Swal.fire({
                icon: 'info',
                title: 'ลบข้อมูล',
                text: 'คุณต้องการที่จะลบข้อมูลนี้ใช่หรือไม่',
                showCancelButton: true,
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    @this.
                    delete(key);
                }
            })
        })
    </script>
@endpush
