<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex flex-col items-start justify-start gap-4 rounded-t-2xl border-b-0 border-b-transparent p-6 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-row items-center space-x-4">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-list-ol text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ขั้นตอนโครงงาน
                    </h5>
                </div>
                <button type="button" class="btn w-full from-blue-500 to-violet-500 text-sm text-white sm:w-auto"
                    data-modal-target="createModal" data-modal-toggle="createModal" id="btninsert"
                    wire:click="$emit('getProjectStepCreate')">
                    <div class="flex flex-row items-center justify-center gap-3">
                        <i class="bi bi-plus-lg leading-0"></i>
                        <span class="block">เพิ่มขั้นตอนโครงงาน</span>
                    </div>
                </button>
            </div>

            <div class="flex flex-col justify-start gap-3 px-6 sm:flex-row sm:items-center sm:justify-end">
                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="bi bi-search text-lg leading-0 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            <input type="text" id="search" class="input pl-10" placeholder="ค้นหา">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-auto flex-wrap p-6">
                <div class="overflow-x-auto p-0">
                    <table
                        class="mb-0 w-full items-center border-gray-200 align-top tracking-wide text-slate-500 dark:border-slate-600">
                        <thead class="align-bottom">
                            <tr class="text-black dark:text-white">
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-left align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ภาคเรียน/ปีการศึกษา
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    วันที่เริ่มภาคเรียน - วันที่จบภาคเรียน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-center align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
                                    ขั้นตอนการทำงาน
                                </th>
                                <th
                                    class="border-b-solid whitespace-nowrap border-b border-gray-200 bg-transparent px-6 py-3 text-right align-middle text-base font-bold uppercase tracking-none opacity-70 shadow-none dark:border-slate-600">
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
                                        class="inline-block leading-tight text-black dark:text-white">
                                        <i class="bi bi-calendar2-week-fill"></i> ' .
                                                thaidate('j F Y', strtotime($arr['phase_' . $i . '_start_date'])) .
                                                '</span>
                                            <span
                                                class="mx-1 inline-block leading-tight text-black dark:text-white">
                                                -
                                            </span>
                                            <span
                                                class="inline-block leading-tight text-black dark:text-white">
                                                <i class="bi bi-calendar2-week-fill"></i> ' .
                                                thaidate('j F Y', strtotime($arr['phase_' . $i . '_end_date'])) .
                                                '</span>';
                                        }
                                    }

                                @endphp
                                <tr>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-left align-middle shadow-transparent dark:border-slate-600">
                                        <span class="inline-block leading-tight text-black dark:text-white">
                                            {{ $project_step->edu_term->term }} / {{ $project_step->edu_term->year }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        {!! implode(', ', $start_end_date) !!}
                                    </td>

                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-center align-middle shadow-transparent dark:border-slate-600">
                                        <span class="inline-block leading-tight text-black dark:text-white">
                                            {{ implode(', ', $workflow) }}
                                        </span>
                                    </td>
                                    <td
                                        class="whitespace-nowrap border-b bg-transparent px-6 py-3 text-right align-middle shadow-transparent dark:border-slate-600">
                                        <div class="flex flex-row justify-end gap-3">
                                            <button type="button" data-modal-target="editModal"
                                                data-modal-toggle="editModal"
                                                wire:click="$emit('getProjectStepEdit',{{ $project_step->id }})"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-yellow-300 transition-all ease-in hover:text-yellow-500">
                                                <div class="flex flex-row items-center gap-2">
                                                    <i class="bi bi-pencil-square leading-0"></i>
                                                    <span class="block">แก้ไข</span>
                                                </div>
                                            </button>
                                            <button type="button"
                                                class="inline-block cursor-pointer rounded-lg text-center align-middle font-bold uppercase leading-normal text-rose-500 transition-all ease-in hover:text-rose-800"
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

