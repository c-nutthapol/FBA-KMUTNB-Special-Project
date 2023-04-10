@extends('layouts.app')

@section('title', 'หนัาหลัก')

@section('content')

    <div class="flex flex-wrap mb-10 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="rounded-lg swiper banners">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://images.pexels.com/photos/1809644/pexels-photo-1809644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="banner" class="object-cover w-full rounded-lg h-[36rem]">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.pexels.com/photos/325807/pexels-photo-325807.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="banner" class="object-cover w-full rounded-lg h-[36rem]">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.pexels.com/photos/2325446/pexels-photo-2325446.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="banner" class="object-cover w-full rounded-lg h-[36rem]">
                    </div>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3 mb-6">
            <h2 class="mb-0 text-3xl tracking-wide dark:text-white dark:opacity-90">ปีการศึกษา 2566</h2>
        </div>

        <div class="flex-none w-full max-w-full px-3">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col bg-white rounded-lg dark:bg-slate-850">
                    <div class="relative flex flex-row items-center justify-between h-full">
                        <span
                            class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white bg-blue-500 leading-0 w-14 h-14 rounded-2">
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
                            class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white bg-yellow-400 leading-0 w-14 h-14 rounded-2">
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
                            class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white bg-teal-400 leading-0 w-14 h-14 rounded-2">
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
                            class="flex items-center justify-center p-2 ml-1 text-2xl font-bold text-white leading-0 w-14 h-14 rounded-2 bg-rose-500">
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

    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="p-6 bg-white rounded-lg dark:bg-slate-850">
                <canvas id="chartLine"></canvas>
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
    </script>
@endsection
