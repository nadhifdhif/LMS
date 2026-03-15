<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LMS Code Analyzer</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite / Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

<div class="min-h-screen flex">

    <!-- LEFT PANEL -->
    <div class="hidden lg:flex w-1/2 bg-indigo-600 text-white items-center justify-center">

        <div class="max-w-md text-center px-10">

            <x-application-logo class="w-24 h-24 mx-auto mb-6 fill-white"/>

            <h1 class="text-4xl font-bold mb-4">
                LMS Code Analyzer
            </h1>

            <p class="text-lg opacity-90">
                Monitor GitHub commits and analyze student code automatically using AI.
            </p>

        </div>

    </div>


    <!-- RIGHT PANEL -->
    <div class="flex w-full lg:w-1/2 items-center justify-center bg-gray-100">

        <div class="w-full max-w-md px-6">

            <div class="bg-white shadow-xl rounded-xl p-8">

                {{ $slot }}

            </div>

        </div>

    </div>

</div>

</body>
</html>