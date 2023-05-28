<div class="flex flex-wrap mb-10 -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="rounded-lg swiper banners">
            <div class=" swiper-wrapper">
                @forelse ($banners as $banner)
                    <div class="swiper-slide relative">
                        <img src="{{ Storage::disk('public')->url($banner->img) }}" alt="banner"
                            class="object-contain w-full rounded-lg h-[36rem] relative z-10">
                        <div class="w-full h-[36rem] absolute top-0 left-0 bg-cover bg-no-repeat z-0 blur-lg
                        after:block after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-gradient-to-tr after:from-white/40 after:to-white/40"
                            style="background: url('{{ Storage::disk('public')->url($banner->img) }}') "></div>
                    </div>
                @empty
                    <div class="swiper-slide">
                        <div class="mx-auto mb-2 flex h-auto w-auto items-center justify-center rounded-2 bg-gray-300">
                            <i class="bi bi-image-alt text-4xl leading-0"></i>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</div>
