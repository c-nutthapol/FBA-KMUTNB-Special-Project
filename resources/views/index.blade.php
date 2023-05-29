@extends('layouts.app')

@section('title', 'หนัาหลัก')

@section('content')
    <div class="flex flex-col -mx-3 gap-y-10">

        @livewire('component.banners')

        <div class="flex flex-wrap">
            <div class="flex-none w-full max-w-full px-3 mb-6">
                <h2 class="mb-0 text-3xl tracking-wide dark:text-white dark:opacity-90">ข่าวสาร</h2>
            </div>

            @livewire('component.news')
        </div>

        <div class="flex flex-wrap">
            <div class="flex-none w-full max-w-full px-3 mb-6">
                <h2 class="mb-0 text-3xl tracking-wide dark:text-white dark:opacity-90">ปีการศึกษา 2566</h2>
            </div>

            <div class="flex-none w-full max-w-full px-3">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col bg-white rounded-lg dark:bg-slate-850">
                        <div class="relative flex flex-row items-center justify-between h-full">
                            <span
                                class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white bg-blue-500 h-14 w-14 rounded-2 leading-0">
                                6
                            </span>
                            <h4 class="inline p-4 mb-0 ml-1 text-2xl tracking-wide dark:text-white dark:opacity-90">
                                โครงงาน
                            </h4>
                        </div>
                    </div>

                    <div class="flex flex-col bg-white rounded-lg dark:bg-slate-850">
                        <div class="relative flex flex-row items-center justify-between h-full">
                            <span
                                class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white bg-yellow-400 h-14 w-14 rounded-2 leading-0">
                                4
                            </span>
                            <h4 class="inline p-4 mb-0 ml-1 text-2xl tracking-wide dark:text-white dark:opacity-90">
                                รออนุมัติหัวข้อ
                            </h4>
                        </div>
                    </div>

                    <div class="flex flex-col bg-white rounded-lg dark:bg-slate-850">
                        <div class="relative flex flex-row items-center justify-between h-full">
                            <span
                                class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white bg-teal-400 h-14 w-14 rounded-2 leading-0">
                                2
                            </span>
                            <h4 class="inline p-4 mb-0 ml-1 text-2xl tracking-wide dark:text-white dark:opacity-90">
                                อนุมัติสอบ
                            </h4>
                        </div>
                    </div>

                    <div class="flex flex-col bg-white rounded-lg dark:bg-slate-850">
                        <div class="relative flex flex-row items-center justify-between h-full">
                            <span
                                class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white h-14 w-14 rounded-2 bg-rose-500 leading-0">
                                0
                            </span>
                            <h4 class="inline p-4 mb-0 ml-1 text-2xl tracking-wide dark:text-white dark:opacity-90">
                                อนุมัติผลสอบ
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="flex-none w-full max-w-full px-3">
                <div class="p-6 bg-white rounded-lg dark:bg-slate-850">
                    <canvas id="chartLine"></canvas>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script src="{{ asset('assets/js/plugins/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/lib/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        const ctx = document.getElementById('chartLine');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'โครงงาน',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

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
