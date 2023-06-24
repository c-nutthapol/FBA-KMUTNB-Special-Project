<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    {{-- @include('layouts.partials.css') --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 0 0 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
            margin: 0 0 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        .header {
            margin-top: 12px;
            background-color: #f77100;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
        }

        .header .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            background: #fff;
            width: 72px;
            height: 72px;
            padding: 8px;
            border-radius: 9999px;
        }

        .header h1 {
            font-size: 28px;
            margin: 0;
            color: #fff;
        }

        .content {
            padding: 4rem 1rem;
        }

        .content-status {
            background-color: #F5F5F5;
            border-radius: .75rem;
            padding: 1rem;
            text-align: center;
        }

        .content-status span {
            font-size: 1.5rem;
            font-weight: bold;
            color: #f77100;
        }

        .footer {
            background-color: #343434;
            padding: 20px;
            text-align: center;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        .footer span {
            margin: 0;
            color: #fff;
        }
    </style>
</head>

<body>

    @yield('content')

</body>

</html>
