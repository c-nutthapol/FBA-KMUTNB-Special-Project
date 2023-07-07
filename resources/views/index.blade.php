@extends('layouts.app')

@section('title', 'หนัาหลัก')

@section('content')
    <div class="flex flex-col -mx-3 gap-y-6">

        @livewire('component.banners')

        <div class="flex flex-wrap">
            <div class="flex-none w-full max-w-full px-3 mb-6">
                <h2 class="mb-0 text-3xl tracking-wide dark:text-slate-300 dark:opacity-90">ข่าวสาร</h2>
            </div>

            @livewire('component.news')
        </div>

        @if (auth()->user()->role_id == 3)
            @livewire('component.dashboard')
        @endif

    </div>

@endsection

@section('script')
    <script src="{{ asset('assets/js/plugins/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/lib/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        const swiper = new Swiper(".banners", {
            speed: 600,
            spaceBetween: 40,
            autoplay: {
                delay: 5000,
            },
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: true,
            },
        });

        const swiperNews = new Swiper(".news", {
            loop: true,
            slidesPerView: 1,
            speed: 600,
            spaceBetween: 10,
            pauseOnMouseEnter: true,
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: ".swiper-next",
                prevEl: ".swiper-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    </script>
@endsection
