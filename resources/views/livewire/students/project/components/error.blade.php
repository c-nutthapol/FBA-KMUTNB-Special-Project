<div>

    <div class="-mx-3 flex flex-wrap">
        <div class="w-full max-w-full flex-none px-3">
            <div
                class="relative mb-6 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid border-transparent bg-white bg-clip-border shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                <div
                    class="border-b-solid mb-0 flex items-center space-x-4 rounded-t-2xl border-b-0 border-b-transparent p-6">
                    <div class="flex h-full items-center rounded-3 bg-blue-500 p-3.5 text-white dark:bg-slate-700/40">
                        <i class="bi bi-mortarboard-fill text-2xl leading-0 text-white dark:text-blue-500"></i>
                    </div>
                    <h5 class="mb-0 tracking-wide dark:text-slate-300">
                        {{ $data->error->name }}
                    </h5>
                </div>
                <div class="flex-auto p-6">
                    <div class="overflow-x-auto p-0">
                        <div class="flex flex-wrap justify-center gap-6 sm:justify-start">
                            @if ($data->error->redirect)
                                <a href="{{ $data->error->redirect }}">
                                    <button
                                        class="btn from-teal-400 to-green-400 text-xl text-white">{{ $data->error->btn }}</button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

