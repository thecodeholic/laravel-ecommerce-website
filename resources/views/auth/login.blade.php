<x-app-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
        </a>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <form action="{{ route('login') }}" method="post" class="w-[400px] mx-auto p-6 my-16">
        @csrf

        <h2 class="text-2xl font-semibold text-center mb-5">
            Login to your account
        </h2>
        <p class="text-center text-gray-500 mb-6">
            or
            <a
                href="{{route('register')}}"
                class="text-sm text-purple-700 hover:text-purple-600"
            >create new account</a
            >
        </p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>


        <div class="mb-4">
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Your email address"
                     :value="old('email')" required autofocus/>
        </div>
        <div class="mb-4">
            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     placeholder="Your password"
                     required autocomplete="current-password"/>
        </div>

        <div class="flex justify-between items-center mb-5">
            <div class="flex items-center">
                <input
                    id="loginRememberMe"
                    type="checkbox"
                    name="remember"
                    class="mr-3 rounded border-gray-300 text-purple-500 focus:ring-purple-500"
                />
                <label for="loginRememberMe">Remember Me</label>
            </div>
            <a href="{{route('password.request')}}" class="text-sm text-purple-700 hover:text-purple-600">Forgot
                Password?</a>
        </div>
        <button
            class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full"
        >
            Login
        </button>
    </form>
</x-app-layout>
