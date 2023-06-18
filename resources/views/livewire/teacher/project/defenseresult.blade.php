<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div
                class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                    <i class="text-2xl text-white bi bi-6-circle-fill leading-0 dark:text-blue-500"></i>
                </div>
                <h5 class="mb-0 tracking-wide dark:text-white">
                    ผลการสอบป้องกัน
                </h5>
            </div>
            <div class="flex flex-col justify-start gap-3 px-6 sm:items-center sm:justify-between sm:flex-row">
                <div>
                    <select class="select" wire:model='year'>
                        <option value="" selected>
                            ปีการศึกษาทั้งหมด
                        </option>
                        @foreach ($termFilter as $item_term)
                        <option value="{{$item_term->id}}">
                            {{$item_term->term}} / {{$item_term->year}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    {{-- <div class="flex-1">
                        <select class="select">
                            <option value="" selected>
                                สถานะทั้งหมด
                            </option>
                            @foreach ($statusFilter as $item_status)
                            <option value="{{$item_status->id}}">
                                {{$item_status->status}}
                            </option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="flex-1">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="text-lg text-gray-500 bi bi-search dark:text-gray-400 leading-0"></i>
                            </div>
                            <input type="text" id="search" class="pl-10 input" wire:model="search" placeholder="ค้นหา">
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
                                    <span class="text-sm dark:text-slate-400">{{ $project->edu_term->term }}/{{
                                        $project->edu_term->year }}</span>
                                </td>
                                <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <div class="flex flex-row justify-center space-x-4">
                                        <figure class="flex flex-row items-center space-x-2">
                                            <figcaption class="text-sm dark:text-slate-400">
                                                @foreach ($project->StudentListForTable as $item_student)
                                                {{ $item_student }}<br>
                                                @endforeach
                                            </figcaption>
                                        </figure>
                                    </div>
                                </td>
                                <td
                                    class="px-6 py-3 text-center align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    <a href="/storage/{{$project->files->sortByDesc('created_at')->first()->path}}" download
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
                                        <select id="UpdateStatusProject" class="select" data-id="{{$project->id}}">
                                            <option value="" disabled selected>
                                                {{$project->master_status->status}}
                                            </option>
                                            @forelse ($project->SelectOption as $item)
                                            <option value="{{$item->id}}">
                                                {{$item->status}}
                                            </option>
                                            @empty

                                            @endforelse
                                        </select>
                                    </div>
                                </td>
                                <td
                                    class="px-6 py-3 text-right align-middle bg-transparent border-b dark:border-slate-600 whitespace-nowrap shadow-transparent">
                                    @if (auth()->user()->role_id == 2)
                                    <div class="flex flex-row justify-end gap-3">
                                        <a href="{{ route('teacher.project.details',['id' => $project->id]) }}"
                                            class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-eye leading-0"></i>
                                                <span class="block">ดูรายละเอียด</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('teacher.project.suggestion',['id'=> $project->id]) }}"
                                            class="inline-block text-sm font-bold leading-normal text-center text-yellow-400 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-chat-dots leading-0"></i>
                                                <span class="block">เสนอแนะ</span>
                                            </div>
                                        </a>
                                    </div>
                                    @elseif(auth()->user()->role_id == 3)
                                    <div class="flex flex-row justify-end gap-3">
                                        <a href="{{ route('admin.project.details',['id' => $project->id]) }}"
                                            class="inline-block text-sm font-bold leading-normal text-center text-blue-500 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-blue-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-eye leading-0"></i>
                                                <span class="block">ดูรายละเอียด</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('admin.project.suggestion',['id'=> $project->id]) }}"
                                            class="inline-block text-sm font-bold leading-normal text-center text-yellow-400 uppercase align-middle transition-all ease-in rounded-lg cursor-pointer hover:text-yellow-700">
                                            <div class="flex flex-row items-center gap-2">
                                                <i class="bi bi-chat-dots leading-0"></i>
                                                <span class="block">เสนอแนะ</span>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
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
@push('script')
<script>
    $(`#UpdateStatusProject`).on(`change`, function(){
        const label = $(this).find("option:selected")[0].text;
        const id = $(this).data("id");
        const status = $(this).val();
        Swal.fire({
            icon: 'question',
            title: 'คุณต้องการเปลี่ยนสถานะ',
            text: `${label} ใช่หรือไม่`,
            showCancelButton: true,
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                @this.updateStatusProject(id, status);
            }
        })
    })

    Livewire.on('refreshComponent', e => {
        location.reload();
    })
</script>
@endpush
