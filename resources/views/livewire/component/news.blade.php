<div class="w-full max-w-full flex-none px-3">
    @if ($News->count())
        <div class="swiper news relative">
            <div class="swiper-wrapper">
                @forelse ($News as $news)
                    <div class="swiper-slide relative">
                        <a href="{{ route('news.view', $news->id) }}">
                            <div class="relative h-full w-full overflow-hidden rounded-4 bg-white dark:bg-slate-850">
                                <img class="h-52 w-full object-cover" src="/storage/{{ $news->cover_img }}"
                                    alt="news pictures">

                                {{-- <img class="object-cover w-full h-52"
                                    src="{{ Storage::disk('public')->url($news->cover_img) }}" alt="news pictures"> --}}
                                <div class="flex h-full flex-col justify-between px-4">
                                    <div class="py-6">
                                        <h4
                                            class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-slate-300 dark:opacity-90">
                                            {{ $news->title }}
                                        </h4>
                                        <span
                                            class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                            {{ $news->master_new->name }}
                                        </span>
                                    </div>

                                    <div class="flex flex-row justify-between border-t-2 border-gray-100/30 py-3">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-slate-300">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            <span
                                                class="ml-1 inline-block tracking-wide">{{ $news->created_at->thaidate() }}</span>
                                        </span>
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-black dark:text-slate-300">
                                            <i class="bi bi-eye-fill"></i>
                                            <span class="ml-1 inline-block tracking-wide">{{ $news->view }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="m-auto text-2xl text-red-600 dark:text-slate-300">ไม่มีข่าวสาร</p>
                @endforelse

            </div>
            <div class="absolute inset-y-2/4 z-10 flex w-full flex-row justify-between px-2">
                <div
                    class="swiper-prev flex h-10 w-10 items-center justify-center rounded-3 bg-blue-500 p-3 text-xl text-white opacity-65 transition-all hover:opacity-100">
                    <i class="bi bi-chevron-left block leading-0"></i>
                </div>
                <div
                    class="swiper-next flex h-10 w-10 items-center justify-center rounded-3 bg-blue-500 p-3 text-xl text-white opacity-65 transition-all hover:opacity-100">
                    <i class="bi bi-chevron-right block leading-0"></i>
                </div>
            </div>
        </div>
    @else
        <p class="m-auto text-2xl text-red-600">ไม่มีข่าวสาร</p>
    @endif
</div>

