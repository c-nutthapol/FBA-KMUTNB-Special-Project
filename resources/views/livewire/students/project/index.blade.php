@section('title', 'โครงงาน')
<div>

    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">
            <div
                class="relative mb-6 flex min-w-0 flex-col items-center justify-start gap-3 break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl sm:flex-row sm:justify-between">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div class="flex h-full items-center rounded-3 bg-teal-400 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-folder-fill text-2xl leading-0 text-white dark:text-teal-400"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        <span class="block font-bold">{{ $data->project->name_th ?? '' }}</span>
                        <span
                            class="block font-normal text-slate-600 dark:text-white">{{ $data->project->name_en ?? '' }}</span>
                    </h5>
                </div>
                <div class="pb-6 sm:p-6">
                    <span class="block text-center text-xl font-bold dark:text-white">สถานะ</span>
                    {{-- รออนุมัติ --}}
                    @if (in_array($data->project->status, [1,7,13,19]))
                        <span
                            class="block text-xl font-bold text-orange-400">{{ $data->project->master_status->status }}</span>
                        {{-- ไม่อนุมัติ --}}
                    @elseif(in_array($data->project->status, [3,6,9,12,15,18,21]))
                        <span
                            class="block text-xl font-bold text-red-500">{{ $data->project->master_status->status }}</span>
                        {{-- อนุมัติ --}}
                    @elseif(in_array($data->project->status, [2,8,14]))
                        <span
                            class="block text-xl font-bold text-green-500">{{ $data->project->master_status->status }}</span>
                        {{-- ผ่าน --}}
                    @elseif(in_array($data->project->status, [4,5,10,11,16,17,20]))
                        <span
                            class="block text-xl font-bold text-green-500">{{ $data->project->master_status->status }}</span>
                    @endif
                </div>
                <div class="pb-6 sm:p-6">
                    {{-- ผ่านไป step ต่อไป ยกเว้น step 5 --}}
                    @if (in_array($data->project->status, [2,4,5,8,10,11,16,17,14]))
                        <button type="button" class="btn from-teal-400 to-green-400 text-xs text-white"
                                data-modal-target="uploadModal" data-modal-toggle="uploadModal">
                            <div class="flex flex-row items-center gap-3">
                                <i class="bi bi-cloud-arrow-up text-base leading-0"></i>
                                <span class="block">แนบเอกสาร</span>
                            </div>
                        </button>
                        {{-- ไม่ผ่านทำซ้ำ --}}
                    @elseif(in_array($data->project->status, [9,12,15,18,21]))
                        <button type="button" class="btn from-teal-400 to-green-400 text-xs text-white"
                                data-modal-target="uploadModal" data-modal-toggle="uploadModal">
                            <div class="flex flex-row items-center gap-3">
                                <i class="bi bi-cloud-arrow-up text-base leading-0"></i>
                                <span class="block">แนบเอกสาร</span>
                            </div>
                        </button>
                    @elseif(in_array($data->project->status, [3,6]))
                        <button type="button" class="btn from-teal-400 to-green-400 text-xs text-white"
                                onclick="confirmDelete()">
                            <div class="flex flex-row items-center gap-3">
                                <i class="bi bi-cloud-arrow-up text-base leading-0"></i>
                                <span class="block">ลบโครงงานแล้ว แล้วเริ่มต้นใหม่</span>
                            </div>
                        </button>
                    @endif
                </div>
            </div>

            {{-- ผู้จัดทำโครงงาน --}}
            <div
                class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-mortarboard-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        ผู้จัดทำโครงงาน
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="overflow-x-auto p-0">
                        <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                            <figure
                                class="relative flex w-auto flex-col items-center space-y-6 break-words rounded-4 bg-slate-50 p-6 dark:bg-slate-900/40 sm:flex-row sm:space-y-0 sm:space-x-6">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                         class="h-32 w-32 rounded-4 object-cover object-center shadow-dark-blur"/>
                                </div>
                                <figcaption class="space-y-1 text-center sm:text-left">
                                    <div class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data->project->user_project->where('role', 'student1')->first()->user->displayname ?? '' }}
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">รหัสนักศึกษา</span>:<span class="inline-block">
                                            {{ $data->project->user_project->where('role', 'student1')->first()->user->username ?? '' }}
                                        </span>
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">สาขาวิชา</span>:<span class="inline-block">
                                            {{ $data->project->user_project->where('role', 'student1')->first()->user->masterDepartment->name ?? '' }}</span>
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">ห้อง</span>:<span class="inline-block">
                                            {{ $data->project->user_project->where('role', 'student1')->first()->user->room ?? '' }}</span>
                                    </div>
                                    <div
                                        class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                        <span class="inline-block">อีเมล</span>:<span class="inline-block">
                                            {{ $data->project->user_project->where('role', 'student1')->first()->user->email ?? '' }}</span>
                                    </div>
                                </figcaption>
                            </figure>
                            @if ($data->project->user_project->where('role', 'student2')->first())
                                <figure
                                    class="relative flex w-auto flex-col items-center space-y-6 break-words rounded-4 bg-slate-50 p-6 dark:bg-slate-900/40 sm:flex-row sm:space-y-0 sm:space-x-6">
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                             class="h-32 w-32 rounded-4 object-cover object-center shadow-dark-blur"/>
                                    </div>
                                    <figcaption class="space-y-1 text-center sm:text-left">
                                        <div class="text-lg font-bold tracking-wide dark:text-white">
                                            {{ $data->project->user_project->where('role', 'student2')->first()->user->displayname ?? '' }}
                                        </div>
                                        <div
                                            class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                            <span class="inline-block">รหัสนักศึกษา</span>:<span class="inline-block">
                                                {{ $data->project->user_project->where('role', 'student2')->first()->user->username ?? '' }}
                                            </span>
                                        </div>
                                        <div
                                            class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                            <span class="inline-block">สาขาวิชา</span>:<span class="inline-block">
                                                {{ $data->project->user_project->where('role', 'student2')->first()->user->masterDepartment->name ?? '' }}</span>
                                        </div>
                                        <div
                                            class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                            <span class="inline-block">ห้อง</span>:<span class="inline-block">
                                            {{ $data->project->user_project->where('role', 'student2')->first()->user->room ?? '' }}</span>
                                        </div>
                                        <div
                                            class="space-x-2 text-base font-normal tracking-wide text-slate-600 dark:text-gray-100">
                                            <span class="inline-block">อีเมล</span>:<span class="inline-block">
                                            {{ $data->project->user_project->where('role', 'student2')->first()->user->email ?? '' }}</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-6 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                {{-- อาจารย์ที่ปรึกษา --}}
                <div
                    class="relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl lg:col-span-2">
                    <div
                        class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                        <div
                            class="flex h-full items-center rounded-3 bg-orange-500 p-3.5 text-white dark:bg-slate-700/40">
                            <i class="bi bi-people-fill text-2xl leading-0 text-white dark:text-orange-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            อาจารย์ที่ปรึกษา
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="overflow-x-auto p-0">
                            <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                                <figure
                                    class="relative flex w-52 flex-col items-center overflow-hidden break-words rounded-4 border border-gray-100 bg-white p-6 dark:border-slate-900 dark:bg-transparent md:w-60">
                                    <div class="mt-4 mb-6 flex items-center">
                                        <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                             class="h-32 w-32 rounded-4 object-cover object-center shadow-dark-blur"/>
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data->project->user_project->where('role', 'teacher1')->first()->user->displayname ?? '' }}
                                    </figcaption>
                                    <span
                                        class="absolute top-0 right-0 rounded-bl-4 bg-teal-500 px-3 py-1 text-sm font-black tracking-wider text-white shadow-primary-outline dark:bg-slate-900/40 dark:text-gray-100 dark:shadow-dark-xl">
                                        ที่ปรึกษาหลัก
                                    </span>
                                </figure>
                                @if($data->project->user_project->where('role', 'teacher2')->first())
                                    <figure
                                        class="relative flex w-52 flex-col items-center overflow-hidden break-words rounded-4 border border-gray-100 bg-white p-6 dark:border-slate-900 dark:bg-transparent md:w-60">
                                        <div class="mt-4 mb-6 flex items-center">
                                            <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                                 class="h-32 w-32 rounded-4 object-cover object-center shadow-dark-blur"/>
                                        </div>
                                        <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                            {{ $data->project->user_project->where('role', 'teacher2')->first()->user->displayname ?? '' }}
                                        </figcaption>
                                        <span
                                            class="absolute top-0 right-0 rounded-bl-4 bg-blue-500 px-3 py-1 text-sm font-black tracking-wider text-white shadow-primary-outline dark:bg-slate-900/40 dark:text-gray-100 dark:shadow-dark-xl">
                                        ที่ปรึกษารอง
                                    </span>
                                    </figure>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ประธานสอบ --}}
                <div
                    class="relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                    <div
                        class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                        <div
                            class="flex h-full items-center rounded-3 bg-orange-500 p-3.5 text-white dark:bg-slate-700/40">
                            <i class="bi bi-person-workspace text-2xl leading-0 text-white dark:text-orange-500"></i>
                        </div>
                        <h5 class="mb-0 tracking-wide dark:text-white">
                            ประธานสอบ
                        </h5>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="overflow-x-auto p-0">
                            <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                                <figure
                                    class="relative flex w-60 flex-col items-center overflow-hidden break-words rounded-4 border border-gray-100 bg-white p-6 dark:border-slate-900 dark:bg-transparent">
                                    <div class="mt-4 mb-6 flex items-center">
                                        <img src="{{ asset('assets/img/user.png') }}" alt="avatar"
                                             class="h-32 w-32 rounded-4 object-cover object-center shadow-dark-blur"/>
                                    </div>
                                    <figcaption class="text-lg font-bold tracking-wide dark:text-white">
                                        {{ $data->project->user_project->where('role', 'teacher3')->first()->user->displayname ?? '' }}
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Doc Upload Modal -->
    <div id="uploadModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
         class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full"
         wire:ignore.self>
        <div class="relative h-full w-full max-w-xl md:h-auto">
            <!-- Modal content -->
            <form class="relative rounded-lg bg-white shadow dark:bg-gray-700" wire:submit.prevent="submit">
                <!-- Modal header -->
                <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                    <h3 class="mb-0 text-xl font-semibold tracking-wide text-gray-900 dark:text-white">
                        <i class="bi bi-cloud-arrow-up leading-0"></i> แนบเอกสาร
                    </h3>
                    <button type="button"
                            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="uploadModal">
                        <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">ปิด</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-y-4 p-6">
                    <div>
                        <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80">
                            แนบเอกสาร
                            <span class="text-rose-600">*</span>
                        </label>
                        <input class="input h-full p-0" type="file" accept="application/pdf"
                               wire:model.defer="file" multiple>
                        @error('file')
                        <span class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center justify-end space-x-2 rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                        <button data-modal-hide="uploadModal" type="button"
                                class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                            ยกเลิก
                        </button>
                        <button wire:loading.attr="disabled" wire:target="submit()" type="submit"
                                class="btn from-blue-500 to-violet-500 text-sm font-medium text-white">
                            <div class="flex flex-row items-center gap-3">
                                <i class="bi bi-save-fill leading-0"></i>
                                <span class="block">บันทึก</span>
                                <svg aria-hidden="true" role="status" class="inline h-4 w-4 animate-spin text-white"
                                     viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"
                                     wire:loading="submit()">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="#E5E7EB"/>
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentColor"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@push('script')
    <script>
        function confirmDelete() {
            Swal.fire({
                icon: 'question',
                title: 'คุณต้องการลบโครงงาน',
                text: `ใช่หรือไม่`,
                showCancelButton: true,
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    @this.
                    deleteProject();
                }
            })
        }
    </script>
@endpush

