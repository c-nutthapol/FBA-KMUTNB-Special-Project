@extends('layouts.app')

@section('title', 'หนัาหลัก')

@section('content')
    <div class="flex flex-col -mx-3 gap-y-10">

        @livewire('component.banners')

        <div class="flex flex-wrap">
            <div class="flex-none w-full max-w-full px-3 mb-6">
                <h2 class="mb-0 text-3xl tracking-wide dark:text-white dark:opacity-90">ข่าวสาร</h2>
            </div>

            <div class="flex-none w-full max-w-full px-3">
                <div class="relative swiper news">
                    <div class="swiper-wrapper">
                        <div class="relative swiper-slide">
                            <a href="#">
                                <div class="relative w-full h-full overflow-hidden bg-white rounded-4 dark:bg-slate-850">
                                    <img class="object-cover w-full h-52"
                                        src="https://c4.wallpaperflare.com/wallpaper/237/280/1007/oshi-no-ko-anime-girls-hd-wallpaper-preview.jpg"
                                        alt="news pictures">
                                    <div class="flex flex-col justify-between h-full px-4">
                                        <div class="py-6">
                                            <h4
                                                class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-white dark:opacity-90">
                                                "Oshi no Ko"
                                            </h4>
                                            <span
                                                class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                กิจกรรม
                                            </span>
                                        </div>

                                        <div class="flex flex-row justify-between py-3 border-t-2 border-gray-100/30">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">29/05/2566</span>
                                            </span>
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-eye-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">20</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="relative swiper-slide">
                            <a href="#">
                                <div class="relative w-full h-full overflow-hidden bg-white rounded-4 dark:bg-slate-850">
                                    <img class="object-cover w-full h-52"
                                        src="https://c4.wallpaperflare.com/wallpaper/551/1015/739/oshi-no-ko-ai-hoshino-anime-anime-girls-purple-hair-hd-wallpaper-preview.jpg"
                                        alt="news pictures">
                                    <div class="flex flex-col justify-between h-full px-4">
                                        <div class="py-6">
                                            <h4
                                                class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-white dark:opacity-90">
                                                "Oshi no Ko"
                                            </h4>
                                            <span
                                                class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                กิจกรรม
                                            </span>
                                        </div>

                                        <div class="flex flex-row justify-between py-3 border-t-2 border-gray-100/30">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">29/05/2566</span>
                                            </span>
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-eye-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">20</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="relative swiper-slide">
                            <a href="#">
                                <div class="relative w-full h-full overflow-hidden bg-white rounded-4 dark:bg-slate-850">
                                    <img class="object-cover w-full h-52"
                                        src="https://c4.wallpaperflare.com/wallpaper/1004/322/465/yoasobi-oshi-no-ko-hd-wallpaper-preview.jpg"
                                        alt="news pictures">
                                    <div class="flex flex-col justify-between h-full px-4">
                                        <div class="py-6">
                                            <h4
                                                class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-white dark:opacity-90">
                                                "Oshi no Ko"
                                            </h4>
                                            <span
                                                class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                กิจกรรม
                                            </span>
                                        </div>

                                        <div class="flex flex-row justify-between py-3 border-t-2 border-gray-100/30">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">29/05/2566</span>
                                            </span>
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-eye-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">20</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="relative swiper-slide">
                            <a href="#">
                                <div class="relative w-full h-full overflow-hidden bg-white rounded-4 dark:bg-slate-850">
                                    <img class="object-cover w-full h-52"
                                        src="https://c4.wallpaperflare.com/wallpaper/490/222/435/oshi-no-ko-star-eyes-hd-wallpaper-preview.jpg"
                                        alt="news pictures">
                                    <div class="flex flex-col justify-between h-full px-4">
                                        <div class="py-6">
                                            <h4
                                                class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-white dark:opacity-90">
                                                "Oshi no Ko"
                                            </h4>
                                            <span
                                                class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                กิจกรรม
                                            </span>
                                        </div>

                                        <div class="flex flex-row justify-between py-3 border-t-2 border-gray-100/30">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">29/05/2566</span>
                                            </span>
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-eye-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">20</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="relative swiper-slide">
                            <a href="#">
                                <div class="relative w-full h-full overflow-hidden bg-white rounded-4 dark:bg-slate-850">
                                    <img class="object-cover w-full h-52"
                                        src="https://c4.wallpaperflare.com/wallpaper/107/454/377/yoasobi-oshi-no-ko-hd-wallpaper-preview.jpg"
                                        alt="news pictures">
                                    <div class="flex flex-col justify-between h-full px-4">
                                        <div class="py-6">
                                            <h4
                                                class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-white dark:opacity-90">
                                                "Oshi no Ko"
                                            </h4>
                                            <span
                                                class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                กิจกรรม
                                            </span>
                                        </div>

                                        <div class="flex flex-row justify-between py-3 border-t-2 border-gray-100/30">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">29/05/2566</span>
                                            </span>
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-eye-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">20</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="relative swiper-slide">
                            <a href="#">
                                <div class="relative w-full h-full overflow-hidden bg-white rounded-4 dark:bg-slate-850">
                                    <img class="object-cover w-full h-52"
                                        src="https://c4.wallpaperflare.com/wallpaper/237/280/1007/oshi-no-ko-anime-girls-hd-wallpaper-preview.jpg"
                                        alt="news pictures">
                                    <div class="flex flex-col justify-between h-full px-4">
                                        <div class="py-6">
                                            <h4
                                                class="mb-0 text-2xl font-bold tracking-wide line-clamp-2 dark:text-white dark:opacity-90">
                                                "Oshi no Ko"
                                            </h4>
                                            <span
                                                class="inline-block whitespace-nowrap rounded-2 bg-gradient-to-tl from-blue-500 to-violet-400 py-1.4 px-2.5 text-center align-baseline text-xs font-bold uppercase leading-none tracking-wider text-white">
                                                กิจกรรม
                                            </span>
                                        </div>

                                        <div class="flex flex-row justify-between py-3 border-t-2 border-gray-100/30">
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-calendar2-week-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">29/05/2566</span>
                                            </span>
                                            <span
                                                class="inline-block text-xs font-semibold leading-tight text-slate-400 dark:text-slate-400">
                                                <i class="bi bi-eye-fill"></i>
                                                <span class="inline-block ml-1 tracking-wide">20</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
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
            </div>
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

