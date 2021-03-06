<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/924ddcdbe2.js" crossorigin="anonymous"></script>
    {{-- <script src="https://kit.fontawesome.com/a9cf051cf6.js" crossorigin="anonymous"></script> --}}
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen flex flex-col justify-between">
        <div class="flex-grow">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center font-bold">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main class="w-full sm:w-3/4 mx-auto ">
                {{ $slot }}
            </main>
        </div>
        <div>
            {{ $pagination ?? '' }}
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
