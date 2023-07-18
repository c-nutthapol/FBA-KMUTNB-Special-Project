@section('title', 'สอบหัวข้อ')
<div>

    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">
            <div
                class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div
                        class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-journal-plus text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-slate-300">
                        ลงทะเบียนโครงงาน
                    </h5>
                </div>
                <div class="flex-auto flex-wrap p-6">
                    <form wire:submit.prevent="submit">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                    for="name_th">ชื่อโครงงาน
                                    (ภาษาไทย) <span class="text-rose-600">*</span></label>
                                <input wire:model.defer="form.name_th" id="name_th" type="text" class="input"
                                       placeholder="กรุณากรอกชื่อโครงงานภาษาไทย"/>
                                @error('form.name_th')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror

                            </div>
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                       for="name_en">
                                    ชื่อโครงงาน (ภาษาอังกฤษ)
                                    <span class="text-rose-600">*</span>
                                </label>
                                <input wire:model.defer="form.name_en" id="name_en" type="text" class="input"
                                       placeholder="กรุณากรอกชื่อโครงงานภาษาอังกฤษ"/>
                                @error('form.name_en')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror


                            </div>
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-slate-300 dark:opacity-80">
                            ผู้จัดทำโครงงาน
                        </h6>
                        <div class="mb-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                       for="selectstudent1">
                                    ชื่อนักศึกษาคนที่ 1
                                    <span class="text-rose-600">*</span>
                                </label>
                                <select id="selectstudent1" class="select" disabled
                                        wire:model.defer="form.student_1.id">
                                    <option value="{{ Auth::user()->id }}" selected>
                                        {{ Auth::user()->displayname }}
                                    </option>
                                </select>

                            </div>
                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                       for="depart1">
                                    สาขาวิชา
                                    <span class="text-rose-600">*</span>
                                </label>
                                <select class="select" wire:model.defer="form.student_1.department" id="depart1">
                                    <option value="" selected disabled>
                                        กรุณาเลือกสาขาวิชา
                                    </option>
                                    @foreach ($data->department as $department)
                                        <option value="{{ $department->id }}">
                                            {{ $department->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('form.student_1.department')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                       for="room1">
                                    ห้อง
                                    <span class="text-rose-600">*</span>
                                </label>
                                <input wire:model.defer="form.student_1.room" type="text" class="input" id="room1"
                                       placeholder="กรุณากรอกห้อง"/>
                                @error('form.student_1.room')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div wire:ignore>
                                <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                       for="select_student2">
                                    ชื่อนักศึกษาคนที่ 2
                                </label>
                                <select class="select" id="select_student2">
                                </select>
                            </div>
                            @if ($form->get('student_2')['id'])

                                <div>
                                    <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                        สาขาวิชา
                                        <span class="text-rose-600">*</span>
                                    </label>
                                    <select class="select" wire:model.defer="form.student_2.department" id="depart2">
                                        <option value="" selected disabled>
                                            กรุณาเลือกสาขาวิชา
                                        </option>
                                        @foreach ($data->department as $department)
                                            <option value="{{ $department->id }}">
                                                {{ $department->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('form.student_2.department')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                           for="room2">
                                        ห้อง
                                        @if ($form->get('student_2')['id'])
                                            <span class="text-rose-600">*</span>
                                        @endif
                                    </label>
                                    <input wire:model.defer="form.student_2.room" type="text" class="input" id="room2"
                                           placeholder="กรุณากรอกห้อง"/>
                                    @error('form.student_2.room')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endif

                        </div>

                        <h6 class="mt-8 mb-4 dark:text-slate-300 dark:opacity-80">อาจารย์ที่ปรึกษาโครงงาน</h6>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <div wire:ignore>

                                    <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                           for="select_teacher1">
                                        ที่ปรึกษาหลัก
                                        <span class="text-rose-600">*</span>
                                    </label>
                                    <select class="select" id="select_teacher1">
                                    </select>
                                </div>
                                @error('form.teacher_1')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <div wire:ignore>
                                        <label
                                            class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                            for="select_teacher2">
                                            ที่ปรึกษาร่วม/กรรมการสอบ
                                        </label>
                                        <select class="select" id="select_teacher2">
                                        </select>
                                    </div>
                                    @error('form.teacher_2')
                                    <span
                                        class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if ($form->get('teacher_2') === 'external')
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                        <div>
                                            <label
                                                class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                                for="teachername_ex">ชื่อ
                                                <span class="text-rose-600">*</span></label>
                                            <input type="text" class="input" id="teachername_ex"
                                                   wire:model.defer="form.external.fname"
                                                   placeholder="กรุณากรอกชื่อ"/>
                                            @error('form.external.fname')
                                            <span
                                                class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div>
                                            <label
                                                class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                                for="teachersurname_ex">นามสกุล
                                                <span class="text-rose-600">*</span></label>
                                            <input type="text" class="input" id="teachersurname_ex"
                                                   wire:model.defer="form.external.lname"
                                                   placeholder="กรุณากรอกนามสกุล"/>
                                            @error('form.external.lname')
                                            <span
                                                class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-2">
                                            <label
                                                class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                                แนบเอกสาร (หนังสือแต่งตั้ง) <span class="text-rose-600">*</span>
                                            </label>
                                            <input class="input p-0" type="file"
                                                   wire:model.defer="file_teacher"
                                                   id="fileteacherupload"
                                                   accept="application/pdf" multiple>
                                            @error('file_teacher')
                                            <span
                                                class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-slate-300 dark:opacity-80">ประธานสอบ</h6>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <div wire:ignore>
                                    <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                           for="select_teacher3">
                                        ประธานสอบ
                                        <span class="text-rose-600">*</span>
                                    </label>
                                    <select class="select" id="select_teacher3">
                                    </select>
                                </div>
                                @error('form.teacher_3')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                                @if ($form->get('teacher_3') === 'external')
                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                        <div>
                                            <label
                                                class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                                for="teacher3name_ex">ชื่อ
                                                <span class="text-rose-600">*</span></label>
                                            <input type="text" class="input" id="teacher3name_ex"
                                                   wire:model.defer="form.external1.fname"
                                                   placeholder="กรุณากรอกชื่อ"/>
                                            @error('form.external1.fname')
                                            <span
                                                class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div>
                                            <label
                                                class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                                for="teacher3surname_ex">นามสกุล
                                                <span class="text-rose-600">*</span></label>
                                            <input type="text" class="input" id="teacher3surname_ex"
                                                   wire:model.defer="form.external1.lname"
                                                   placeholder="กรุณากรอกนามสกุล"/>
                                            @error('form.external1.lname')
                                            <span
                                                class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-span-2">
                                            <label
                                                class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80"
                                                for="fileteacher3upload">
                                                แนบเอกสาร (หนังสือแต่งตั้ง) <span class="text-rose-600">*</span>
                                            </label>
                                            <input class="input p-0" type="file"
                                                   wire:model.defer="file_teacher1"
                                                   id="fileteacher3upload"
                                                   accept="application/pdf" multiple>
                                            @error('file_teacher')
                                            <span
                                                class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <h6 class="mt-8 mb-4 dark:text-slate-300 dark:opacity-80">เอกสารประกอบ</h6>
                        <div>
                            <div class="mb-2">
                                <label class="mb-2 text-sm tracking-wide dark:text-slate-300 dark:opacity-80">
                                    แนบเอกสาร
                                    <span class="text-rose-600">*</span>
                                </label>
                                <input accept="application/pdf" id="fileupload"
                                       class="input h-full p-0"
                                       type="file" wire:model.defer="file_project" multiple>
                                @error('file_project')
                                <span
                                    class="mt-1 ml-2 block text-sm tracking-wide text-rose-600">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- โชว์เฉพาะตอนที่มีเอกสาร --}}
                            {{-- <a href="#"
                                    class="inline-block cursor-pointer rounded-lg text-center align-middle text-sm font-bold uppercase leading-normal text-teal-400 transition-all ease-in hover:text-teal-600">
                                <div class="flex flex-row items-center gap-2">
                                    <i class="bi bi-download leading-0"></i>
                                    <span class="block">ดาวน์โหลดเอกสาร</span>
                                </div>
                            </a> --}}
                        </div>

                        <div class="mt-10 text-end">

                            <button type="submit" id="submit" class="btn from-blue-500 to-violet-500 text-sm text-white"
                                    wire:loading.attr="disabled" wire:target="submit()">
                                <div class="flex flex-row items-center gap-3">
                                    <i class="bi bi-save-fill text-base leading-0"></i>
                                    <span class="block">บันทึก</span>
                                    {{-- loading --}}
                                    <svg aria-hidden="true" role="status"
                                         class="inline h-4 w-4 animate-spin text-white" viewBox="0 0 100 101"
                                         fill="none" xmlns="http://www.w3.org/2000/svg"
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
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@push('script')
    <script>
        let s2 = $('#select_student2')
        let t1 = $('#select_teacher1')
        let t2 = $('#select_teacher2')
        let t3 = $('#select_teacher3')
        //init
        $(document).ready(function () {
            s2.select2({
                placeholder: "เลือกนักศึกษาคนที่ 2",
                ajax: {
                    url: 'get_student',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            search: params.term
                        };
                    },
                }
            });
        });
        $(document).ready(function () {
            t1.select2({
                placeholder: "เลือกที่ปรึกษาหลัก",
                ajax: {
                    url: 'get_teacher',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            search: params.term
                        };
                    },
                }
            });
        });
        $(document).ready(function () {
            t2.select2({
                placeholder: "เลือกที่ปรึกษาร่วม/กรรมการสอบ",
                ajax: {
                    url: 'get_teacher',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            search: params.term,
                            type: "teacher2"
                        };
                    },
                }
            });
        });
        $(document).ready(function () {
            t3.select2({
                placeholder: "เลือกประธานสอบ",
                ajax: {
                    url: 'get_teacher',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            search: params.term,
                            type: "teacher2"
                        };
                    },
                }
            });
        });
        //end init

        //change value
        s2.on('change', function (e) {
            @this.
            set('form.student_2.id', s2.val())
        })
        t1.on('change', function (e) {
            @this.
            set('form.teacher_1', t1.val())
        })
        t2.on('change', function (e) {
            @this.
            set('form.teacher_2', t2.val())
        })
        t3.on('change', function (e) {
            @this.
            set('form.teacher_3', t3.val())
        })

    </script>
@endpush

