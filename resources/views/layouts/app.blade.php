<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- 🔥 ANTI FLICKER (WAJIB) -->
    <script>
        if (localStorage.getItem("sidebarPinned") === "true") {
            document.documentElement.classList.add("sidebar-pinned");
        }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

<div class="min-h-screen">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="mainContent"
         class="ml-16 transition-all duration-300 overflow-x-hidden min-h-screen">

        <!-- Header -->
        <header class="bg-white shadow flex items-center px-6 py-4">

            <!-- Toggle Sidebar -->
            <button id="toggleSidebar"
                    class="mr-4 text-gray-600 hover:text-gray-900 text-xl">
                ☰
            </button>

            @yield('header')

        </header>

        <!-- Page Content -->
        <main class="p-6">
            @yield('content')
        </main>

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const toggleBtn = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const main = document.getElementById("mainContent");

    // 🔥 SYNC STATE (biar class konsisten setelah load)
    if (localStorage.getItem("sidebarPinned") === "true") {
        sidebar.classList.add("pinned");
        main.classList.remove("ml-16");
        main.classList.add("ml-64");
    }

    toggleBtn.addEventListener("click", function () {

        sidebar.classList.toggle("pinned");

        const isPinned = sidebar.classList.contains("pinned");

        // simpan state
        localStorage.setItem("sidebarPinned", isPinned);

        // 🔥 sync ke root (anti flicker next load)
        document.documentElement.classList.toggle("sidebar-pinned", isPinned);

        if (isPinned) {
            main.classList.remove("ml-16");
            main.classList.add("ml-64");
        } else {
            main.classList.remove("ml-64");
            main.classList.add("ml-16");
        }

    });

});
</script>

</body>
</html>