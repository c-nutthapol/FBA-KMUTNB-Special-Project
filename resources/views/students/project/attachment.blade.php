@extends('layouts.app')

@section('title', 'แนบเอกสารประกอบโครงงาน')

@section('content')
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            @include('components.students.nav-project')
        </div>
    </div>

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            {{-- แนบเอกสาร --}}
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div
                    class="flex items-center p-6 mb-0 space-x-4 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex items-center h-full p-3.5 rounded-3 bg-blue-500 dark:bg-slate-700/40 text-white">
                        <i class="text-2xl text-white bi bi-file-earmark-arrow-up-fill leading-0 dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-white">
                        แนบเอกสาร
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="p-0 overflow-x-auto">
                        <form>
                            <div class="inline-block w-auto">
                                <div class="flex flex-row gap-3">
                                    <input class="input h-full p-0" type="file">
                                    <button type="submit" class="btn text-xs  text-white  from-teal-400 to-green-400">
                                        <div class="flex flex-row items-center gap-3">
                                            <i class="bi bi-upload leading-0"></i>
                                            <span class="block">อัพโหลด</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
