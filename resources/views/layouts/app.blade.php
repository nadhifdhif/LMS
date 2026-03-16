<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="mainContent"
         class="flex-1 ml-64 transition-all duration-300">

        <!-- Header -->
        <header class="bg-white shadow flex items-center px-6 py-4">

            <!-- Toggle Sidebar -->
            <button id="toggleSidebar"
                    class="mr-4 text-gray-600 hover:text-gray-900 text-xl">
                ☰
            </button>

            @isset($header)
                <div class="text-lg font-semibold">
                    {{ $header }}
                </div>
            @endisset

        </header>

        <!-- Page Content -->
        <main class="p-6">
            {{ $slot }}
        </main>

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const toggleBtn = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const main = document.getElementById("mainContent");
    const texts = document.querySelectorAll(".menu-text");

    toggleBtn.addEventListener("click", function () {

        const collapsed = sidebar.classList.contains("w-16");

        if (collapsed) {
            sidebar.classList.remove("w-16");
            sidebar.classList.add("w-64");

            main.classList.remove("ml-16");
            main.classList.add("ml-64");

            texts.forEach(el => el.classList.remove("hidden"));

        } else {
            sidebar.classList.remove("w-64");
            sidebar.classList.add("w-16");

            main.classList.remove("ml-64");
            main.classList.add("ml-16");

            texts.forEach(el => el.classList.add("hidden"));
        }

    });

});
</script>

<script>
const sidebar = document.getElementById("sidebar");
const toggleBtn = document.getElementById("toggleSidebar");

toggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed");
});
</script>

</body>
</html>