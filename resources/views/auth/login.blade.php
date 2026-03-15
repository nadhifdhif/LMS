<x-guest-layout>

    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Sign in to your account
    </h2>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 relative">

            <label for="password" class="block text-sm font-medium text-gray-700">
                Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm pr-12 focus:ring-indigo-500 focus:border-indigo-500"
            />

            <!-- icon button -->
            <button
                type="button"
                onclick="togglePassword()"
                class="absolute right-3 top-9 text-gray-400 hover:text-indigo-600 transition duration-200">

                <!-- eye -->
                <svg id="eye-open"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5
                          c4.477 0 8.268 2.943 9.542 7
                          -1.274 4.057-5.065 7-9.542 7
                          -4.477 0-8.268-2.943-9.542-7z"/>
                </svg>

                <!-- eye slash -->
                <svg id="eye-close"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 hidden"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M13.875 18.825A10.05 10.05 0 0112 19
                          c-4.478 0-8.268-2.943-9.542-7
                          a9.956 9.956 0 012.223-3.592M6.223 6.223
                          A9.956 9.956 0 0112 5c4.478 0 8.268 2.943
                          9.542 7a9.956 9.956 0 01-4.293 5.182M6.223
                          6.223L3 3m3.223 3.223l11.314
                          11.314"/>

                </svg>

            </button>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>

        <!-- Remember -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me"
                    type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>

        <!-- Login button -->
        <div class="flex items-center justify-between mt-6">

            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('password.request') }}">
                    Forgot password?
                </a>
            @endif

            <x-primary-button>
                Log in
            </x-primary-button>

        </div>

    </form>

    <!-- Register -->
    <div class="text-center mt-6 text-sm text-gray-500">
        Belum punya akun?
        <a href="{{ route('register') }}"
           class="text-indigo-600 font-semibold hover:underline">
            Register
        </a>
    </div>

<script>

function togglePassword(){

    const input = document.getElementById("password");
    const open = document.getElementById("eye-open");
    const close = document.getElementById("eye-close");

    if(input.type === "password"){
        input.type = "text";
        open.classList.add("hidden");
        close.classList.remove("hidden");
    } else {
        input.type = "password";
        open.classList.remove("hidden");
        close.classList.add("hidden");
    }

}

</script>

</x-guest-layout>