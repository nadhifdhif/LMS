<aside id="sidebar"
class="sidebar fixed left-0 top-0 h-screen w-16 bg-gray-900 text-white
transition-all duration-300 overflow-hidden z-40 flex flex-col">

    <!-- Logo -->
    <div class="h-[64px] border-b border-gray-700 flex items-center px-4">
        <span class="text-lg font-semibold whitespace-nowrap sidebar-text">
            LMS
        </span>
    </div>

    <!-- Menu -->
    <nav class="mt-4 flex-1">
        <ul class="space-y-1 px-2">

            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition
                   {{ request()->routeIs('dashboard') ? 'bg-gray-800' : 'hover:bg-gray-800' }}">
                    <x-heroicon-o-home class="w-6 h-6 shrink-0"/>
                    <span class="sidebar-text whitespace-nowrap">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('courses') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition
                   {{ request()->routeIs('courses*') ? 'bg-gray-800' : 'hover:bg-gray-800' }}">
                    <x-heroicon-o-academic-cap class="w-6 h-6 shrink-0"/>
                    <span class="sidebar-text whitespace-nowrap">Courses</span>
                </a>
            </li>

            <li>
                <a href="{{ route('students') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition
                   {{ request()->routeIs('students*') ? 'bg-gray-800' : 'hover:bg-gray-800' }}">
                    <x-heroicon-o-user-group class="w-6 h-6 shrink-0"/>
                    <span class="sidebar-text whitespace-nowrap">Users</span>
                </a>
            </li>

            <li>
                <a href="#"
                   class="flex items-center gap-3 p-3 rounded-lg transition hover:bg-gray-800">
                    <x-heroicon-o-chart-bar class="w-6 h-6 shrink-0"/>
                    <span class="sidebar-text whitespace-nowrap">Reports</span>
                </a>
            </li>

        </ul>
    </nav>

    <!-- User -->
    <div class="border-t border-gray-700 p-4 flex items-center gap-3">
        <img
            src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
            class="w-10 h-10 rounded-full shrink-0">

        <div class="sidebar-text whitespace-nowrap">
            <div class="text-sm text-gray-200">
                {{ Auth::user()->name }}
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="text-xs text-gray-400 hover:text-white">
                    Logout
                </button>
            </form>
        </div>
    </div>

</aside>