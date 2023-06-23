@if ($banners->count())
    <div class="flex flex-wrap">
        <div class="flex-none w-full max-w-full px-3">
            <div class="rounded-lg swiper banners">
                <div class=" swiper-wrapper">
                    @forelse ($banners as $banner)
                        <div class="relative swiper-slide">
                            <img src="/storage/{{$banner->img }}" alt="banner"
                                class="object-contain w-full rounded-lg h-[36rem] relative z-10">
                            <div class="w-full h-[36rem] absolute top-0 left-0 bg-cover bg-no-repeat z-0 blur-lg
                        after:block after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-gradient-to-tr after:from-white/40 after:to-white/40"
                                style="background: url('/storage/{{$banner->img }}') "></div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
@else
@endif
