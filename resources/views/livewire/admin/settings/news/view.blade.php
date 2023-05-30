<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="flex flex-col items-start justify-start gap-1 p-6 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h5 class="mb-0 text-3xl font-bold tracking-wide dark:text-white">
                    {{ $title }}
                </h5>
                <div class="flex flex-row items-center gap-2">
                    <span
                        class="inline-block text-xs font-semibold leading-tight tracking-wide text-slate-400 dark:text-slate-400">
                        <i class="bi bi-calendar2-week-fill"></i> {{ $created_at->thaidate() }}
                    </span>
                    <span class="block">|</span>
                    <span class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                        {{ $masternew_id }}
                    </span>
                </div>
            </div>

            <div class="flex-wrap flex-auto p-6">
                <div class="flex flex-col gap-6">

                    <div class="block mx-auto">
                        {{-- มีรูป --}}
                        <div>
                            <img src="{{ Storage::disk('public')->url($cover_img) }}"
                                class="object-contain object-center w-full h-120 rounded-2" alt="Avatar">
                        </div>
                    </div>

                    <div class="relative max-w-full tracking-wide">
                        {!! $detail !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
