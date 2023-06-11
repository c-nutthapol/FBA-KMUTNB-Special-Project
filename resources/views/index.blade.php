@extends('layouts.app')

@section('title', 'หนัาหลัก')

@section('content')
    <div class="flex flex-col -mx-3 gap-y-6">

        @livewire('component.banners')

        <div class="flex flex-wrap">
            <div class="flex-none w-full max-w-full px-3 mb-6">
                <h2 class="mb-0 text-3xl tracking-wide dark:text-white dark:opacity-90">ข่าวสาร</h2>
            </div>

            @livewire('component.news')
        </div>

        <div class="flex flex-wrap">
            <div class="flex-none w-full max-w-full px-3 mb-6">
                <h2 class="mb-0 text-3xl tracking-wide dark:text-white dark:opacity-90">แดชบอร์ด</h2>
            </div>

            <div class="flex-none w-full max-w-full px-3 mb-6">
                <form
                    class="flex flex-row items-end justify-between gap-4 p-4 bg-white rounded-lg dark:bg-slate-850 dark:text-white dark:opacity-90">
                    <div class="flex flex-row flex-1 gap-4">
                        <div class="flex-initial">
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80" for="year">
                                เลือกปีการศึกษา
                            </label>
                            <select id="year" class="select">
                                <option value="all" selected>
                                    ปีการศึกษาทั้งหมด
                                </option>
                                <option value="2566">
                                    2566
                                </option>
                            </select>
                        </div>

                        <div class="flex-initial">
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80" for="term">
                                เลือกภาคเรียน
                            </label>
                            <select id="term" class="select">
                                <option value="all" selected>
                                    ภาคเรียนทั้งหมด
                                </option>
                                <option value="1">
                                    1
                                </option>
                                <option value="2">
                                    2
                                </option>
                            </select>
                        </div>

                        <div class="flex-initial">
                            <label class="mb-2 text-sm tracking-wide dark:text-white dark:opacity-80" for="major">
                                เลือกสาขาวิชา
                            </label>
                            <select id="major" class="select">
                                <option value="all" selected>
                                    สาขาวิชาทั้งหมด
                                </option>
                                <option value="1">
                                    เทคโนโลยีสารสนเทศ
                                </option>
                                <option value="2">
                                    วิทยาการคอมพิวเตอร์
                                </option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="reset"
                            class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">
                            รีเซ็ต
                        </button>
                        <button type="submit" class="text-sm font-medium text-white btn from-green-500 to-emerald-500"
                            wire:target="submit" wire:loading.attr="disabled">
                            <div class="flex flex-row items-center gap-3" wire:target="submit" wire:loading.class="hidden">
                                <i class="bi bi-download leading-0"></i>
                                <span class="block">Export</span>
                            </div>
                            {{-- loading --}}
                            <svg aria-hidden="true" role="status" class="hidden inline w-4 h-4 text-white animate-spin"
                                wire:target="submit" wire:loading.class.remove="hidden" viewBox="0 0 100 101" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </form>
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
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'โครงงาน',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
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

