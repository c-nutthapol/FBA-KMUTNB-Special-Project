<div class="-mx-3 flex flex-wrap">
    <div class="w-full max-w-full flex-none px-3">
        <div
            class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
            <div
                class="border-b-solid mb-0 flex flex-col items-start justify-start gap-1 rounded-t-2xl border-b-0 border-b-transparent p-6">
                <h5 class="mb-0 text-3xl font-bold tracking-wide dark:text-slate-300">
                    {{ $title }}
                </h5>
                <div class="flex flex-row items-center gap-2">
                    <span
                        class="inline-block text-xs font-semibold leading-tight tracking-wide text-black dark:text-slate-300">
                        <i class="bi bi-calendar2-week-fill"></i> {{ $created_at->thaidate() }}
                    </span>
                    <span class="block dark:text-slate-300">|</span>
                    <span class="inline-block text-xs font-semibold leading-tight text-black dark:text-slate-300">
                        {{ $masternew_id }}
                    </span>
                </div>
            </div>

            <div class="flex-auto flex-wrap p-6">
                <div class="flex flex-col gap-6">

                    <div class="mx-auto block">
                        {{-- มีรูป --}}
                        <div>
                            <img src="/storage/{{ $cover_img }}"
                                class="h-120 w-full rounded-2 object-contain object-center" alt="Avatar">
                        </div>
                    </div>

                    <div class="card-discription relative max-w-full tracking-wide dark:text-slate-300">
                        {!! $detail !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

