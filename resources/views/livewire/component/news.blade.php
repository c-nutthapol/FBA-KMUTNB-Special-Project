<div class="flex-none w-full max-w-full px-3">
    @if ($News->count())
        <div class="relative swiper news">
            <div class="swiper-wrapper">
                @forelse ($News as $news)
                    <div class="relative swiper-slide">
                        <a href="{{ route('news.view', $news->id) }}">
                            <div class="relative w-full h-full overflow-hidden bg-white rounded-4 dark:bg-slate-850">
                                <img class="object-cover w-full h-52"
                                    src="/storage/{{$news->cover_img}}" alt="news pictures">


                                {{-- <img class="object-cover w-full h-52"
                                    src="{{ Storage::disk('public')->url($news->cover_img) }}" alt="news pictures"> --}}
                                <div class="flex flex-col justify-between h-full px-4">
                                    <div class="py-6">
                                        <h4
                                            class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-white dark:opacity-90">
                                            {{ $news->title }}
                                        </h4>
                                        <span
                                            class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                            {{ $news->master_new->name }}
                                        </span>
                                    </div>

                                    <div class="flex flex-row justify-between py-3 border-t-2 border-gray-100/30">
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-calendar2-week-fill"></i>
                                            <span
                                                class="inline-block ml-1 tracking-wide">{{ $news->created_at->thaidate() }}</span>
                                        </span>
                                        <span
                                            class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                            <i class="bi bi-eye-fill"></i>
                                            <span class="inline-block ml-1 tracking-wide">{{ $news->view }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="text-red-600 text-2xl m-auto">ไม่มีข่าวสาร</p>
                @endforelse

            </div>
            <div class="absolute z-10 flex flex-row justify-between w-full px-2 inset-y-2/4">
                <div
                    class="flex items-center justify-center w-10 h-10 p-3 text-xl text-white transition-all bg-blue-500 swiper-prev rounded-3 opacity-65 hover:opacity-100">
                    <i class="block bi bi-chevron-left leading-0"></i>
                </div>
                <div
                    class="flex items-center justify-center w-10 h-10 p-3 text-xl text-white transition-all bg-blue-500 swiper-next rounded-3 opacity-65 hover:opacity-100">
                    <i class="block bi bi-chevron-right leading-0"></i>
                </div>
            </div>
        </div>
    @else
        <p class="text-red-600 text-2xl m-auto">ไม่มีข่าวสาร</p>
    @endif
</div>
