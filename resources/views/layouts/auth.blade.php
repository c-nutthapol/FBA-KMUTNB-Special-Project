<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') . ' |' }} @yield('title')</title>

    <!-- CSS -->
    @include('layouts.partials.css')
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body
    class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500 dark:bg-slate-900">

    <main class="mt-0 transition-all duration-200 ease-in-out">
        <section>
            <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
                <div class="container z-1">
                    @yield('content')
                </div>
            </div>
        </section>
    </main>

    <footer class="py-6">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        - คณะบริหารธุรกิจ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ
                    </p>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    <script>
        const root_html = document.querySelector("html");
        const get_dark_mode = localStorage.getItem("dark-mode-fba");

        if (get_dark_mode) {
            root_html.classList.add("dark");
        }
    </script>
</body>

</html>
