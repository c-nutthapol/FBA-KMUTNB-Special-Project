<div class="flex flex-wrap mb-6 -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="grid gap-4 sm:grid-cols-3">
            <div class="flex flex-col p-4 bg-white rounded-lg dark:bg-slate-850">
                <div class="relative flex flex-row">
                    <span
                        class="flex items-center justify-center w-6 h-6 p-2 text-base font-bold text-white bg-yellow-400 rounded-full">
                        {{$countProject}}
                    </span>
                    <h4 class="inline mb-0 ml-1 tracking-wide dark:text-slate-300 dark:opacity-90">
                        รออนุมัติ
                    </h4>
                </div>
                <div class="dark:text-slate-300 dark:opacity-60">
                    {{$stepText}}
                </div>
            </div>
        </div>
    </div>
</div>
