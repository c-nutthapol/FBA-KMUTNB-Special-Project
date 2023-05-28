<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') . ' |' }} @yield('title')
        @hasSection('subtitle')
            | @yield('subtitle')
        @endif
    </title>

    <!-- CSS -->
    @include('layouts.partials.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="m-0 bg-gray-50 font-sans text-base font-normal leading-default text-slate-500 antialiased dark:bg-slate-900">
    <div class="absolute min-h-75 w-full bg-teal-400 dark:hidden"></div>
    <!-- sidenav  -->
    @include('layouts.partials.sidebar')
    <!-- end sidenav -->

    <main class="relative h-full max-h-screen rounded-xl transition-all duration-200 ease-in-out xl:ml-68">
        <!-- Navbar -->
        @include('layouts.partials.nav')
        <!-- end Navbar -->

        <!-- cards -->
        <div class="mx-auto w-full px-6 py-6">
            @yield('content')
            {{ isset($slot) ? $slot : null }}

            @include('layouts.partials.footer')
        </div>
        <!-- end cards -->
    </main>

    <div fixed-plugin>
        <a fixed-plugin-button
            class="fixed bottom-8 right-8 z-990 cursor-pointer rounded-circle bg-white px-4 py-3 text-xl text-slate-700 shadow-lg">
            <i class="bi bi-gear-fill pointer-events-none leading-0"></i>
        </a>
        <!-- -right-90 in loc de 0-->
        <div fixed-plugin-card
            class="ease fixed -right-90 top-0 left-auto z-sticky flex h-full w-90 min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 shadow-3xl backdrop-blur-2xl backdrop-saturate-200 duration-200 dark:bg-slate-850/80">
            <div class="mb-0 rounded-t-2xl border-b-0 px-6 pt-4 pb-0">
                <div class="float-left">
                    <h5 class="mt-4 mb-0 dark:text-white">Argon Configurator</h5>
                    <p class="dark:text-white dark:opacity-80">See our dashboard options.</p>
                </div>
                <div class="float-right mt-6">
                    <button fixed-plugin-close-button
                        class="mb-4 inline-block cursor-pointer rounded-lg border-0 bg-transparent bg-150 bg-x-25 p-0 text-center align-middle text-sm font-bold uppercase leading-normal tracking-tight-rem text-slate-700 shadow-none transition-all ease-in hover:-translate-y-px active:opacity-85 dark:text-white">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr
                class="mx-0 my-1 h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="flex-auto overflow-auto p-6 pt-0 sm:pt-4">
                <!-- Navbar Fixed -->
                <div class="my-4 flex">
                    <h6 class="mb-0 dark:text-white">Navbar Fixed</h6>
                    <div class="ml-auto block min-h-6 pl-0">
                        <input navbarFixed
                            class="relative float-left mt-1 ml-auto h-5 w-10 cursor-pointer appearance-none rounded-10 border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all duration-250 ease-in-out after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:rounded-circle after:bg-white after:shadow-2xl after:duration-250 after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right checked:after:translate-x-5.3"
                            type="checkbox" />
                    </div>
                </div>
                <hr
                    class="my-6 h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                <div class="mt-2 mb-12 flex">
                    <h6 class="mb-0 dark:text-white">Light / Dark</h6>
                    <div class="ml-auto block min-h-6 pl-0">
                        <input dark-toggle
                            class="relative float-left mt-1 ml-auto h-5 w-10 cursor-pointer appearance-none rounded-10 border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all duration-250 ease-in-out after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:rounded-circle after:bg-white after:shadow-2xl after:duration-250 after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right checked:after:translate-x-5.3"
                            type="checkbox" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
    @include('layouts.partials.script')
    @yield('script')
    @stack('script')
    <script>
        Livewire.on('alert', e => {
            Swal.fire({
                position: 'bottom-end',
                icon: e.status,
                title: e.title,
                text: e.text,
                showConfirmButton: false,
                timer: 3000,
                toast: true,
            })
        });
    </script>
</body>

</html>
