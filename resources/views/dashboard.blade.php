<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LMS Code Analyzer</title>
@vite(['resources/css/app.css','resources/js/app.js'])

<script>
function toggleSidebar(){
  const sb = document.getElementById('sidebar');
  sb.classList.toggle('w-64');
  sb.classList.toggle('w-20');

  document.querySelectorAll('.menu-text').forEach(el=>{
    el.classList.toggle('hidden');
  });
}
</script>
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

<!-- SIDEBAR -->
<aside id="sidebar" class="w-64 bg-indigo-600 text-white flex flex-col transition-all duration-300">

  <!-- logo -->
  <div class="p-4 flex items-center justify-between border-b border-indigo-500">
    <span class="font-bold text-lg menu-text">LMS</span>

    <button onclick="toggleSidebar()">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
      </svg>
    </button>
  </div>


  <!-- MENU -->
  <nav class="flex-1 p-2 space-y-1">

    <!-- Dashboard -->
    <a class="flex items-center gap-3 p-3 rounded hover:bg-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M2.25 12l8.954-8.955a.75.75 0 011.061 0L21.75 12M4.5 10.5v9.75A.75.75 0 005.25 21h4.5v-6h4.5v6h4.5a.75.75 0 00.75-.75V10.5"/>
      </svg>
      <span class="menu-text">Dashboard</span>
    </a>


    <!-- Repositories -->
    <a class="flex items-center gap-3 p-3 rounded hover:bg-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M21 7.5L12 3 3 7.5m18 0v9L12 21m9-4.5L12 12m0 9l-9-4.5V7.5"/>
      </svg>
      <span class="menu-text">Repositories</span>
    </a>


    <!-- Commits -->
    <a class="flex items-center gap-3 p-3 rounded hover:bg-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M17.25 6.75L21 12l-3.75 5.25M6.75 6.75L3 12l3.75 5.25"/>
      </svg>
      <span class="menu-text">Commits</span>
    </a>


    <!-- AI Analysis -->
    <a class="flex items-center gap-3 p-3 rounded hover:bg-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M9 9h6v6H9z"/>
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M3 10h2M3 14h2M10 3v2M14 3v2M19 10h2M19 14h2M10 19v2M14 19v2"/>
      </svg>
      <span class="menu-text">AI Analysis</span>
    </a>


    <!-- Students -->
    <a class="flex items-center gap-3 p-3 rounded hover:bg-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M18 18.75V18a6 6 0 00-12 0v.75M12 12a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"/>
      </svg>
      <span class="menu-text">Students</span>
    </a>


    <!-- Settings -->
    <a class="flex items-center gap-3 p-3 rounded hover:bg-indigo-500">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
      fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
        d="M10.325 4.317a1.724 1.724 0 013.35 0l.17.86a1.724 1.724 0 002.573 1.066l.76-.44a1.724 1.724 0 012.352.635l.43.745a1.724 1.724 0 01-.635 2.352l-.76.44a1.724 1.724 0 000 3.132l.76.44a1.724 1.724 0 01.635 2.352l-.43.745a1.724 1.724 0 01-2.352.635l-.76-.44a1.724 1.724 0 00-2.573 1.066l-.17.86a1.724 1.724 0 01-3.35 0l-.17-.86a1.724 1.724 0 00-2.573-1.066l-.76.44a1.724 1.724 0 01-2.352-.635l-.43-.745a1.724 1.724 0 01.635-2.352l.76-.44a1.724 1.724 0 000-3.132l-.76-.44a1.724 1.724 0 01-.635-2.352l.43-.745a1.724 1.724 0 012.352-.635l.76.44a1.724 1.724 0 002.573-1.066l.17-.86z"/>
      </svg>
      <span class="menu-text">Settings</span>
    </a>

  </nav>


  <!-- USER -->
  <div class="p-4 border-t border-indigo-500 flex items-center gap-3">

      <div class="w-8 h-8 bg-white text-indigo-600 rounded-full flex items-center justify-center font-bold">
        {{ strtoupper(substr(Auth::user()->name,0,1)) }}
      </div>

      <div class="menu-text">
        <div class="text-sm">{{ Auth::user()->name }}</div>

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="text-xs bg-indigo-500 px-2 py-1 rounded mt-1">
            Logout
          </button>
        </form>
      </div>

  </div>

</aside>


<!-- MAIN -->
<main class="flex-1 p-8">

<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-3 gap-6 mb-8">

<div class="bg-white p-6 rounded-lg shadow">
<p class="text-gray-500 text-sm">Repositories</p>
<p class="text-3xl font-bold mt-2">0</p>
</div>

<div class="bg-white p-6 rounded-lg shadow">
<p class="text-gray-500 text-sm">Commits</p>
<p class="text-3xl font-bold mt-2">0</p>
</div>

<div class="bg-white p-6 rounded-lg shadow">
<p class="text-gray-500 text-sm">AI Analysis</p>
<p class="text-3xl font-bold mt-2">0</p>
</div>

</div>

</main>

</div>

</body>
</html>