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
                                    <div
                                        class="relative flex flex-wrap items-stretch w-full overflow-hidden transition-all rounded-lg ease">
                                        <span
                                            class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 dark:text-slate-200 transition-all">
                                            <i class="bi bi-upload leading-0"></i>
                                        </span>
                                        <input type="file"
                                            class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all dark:bg-slate-400/10 dark:border-slate-900 dark:text-slate-200 placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"
                                            required />
                                    </div>
                                    <button type="submit"
                                        class="inline-block px-6 py-3 text-xs font-bold leading-normal text-center text-white uppercase align-middle transition-all ease-in rounded-lg shadow-xs cursor-pointer bg-gradient-to-tl from-teal-500 to-green-500 tracking-tight-rem bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md">
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
