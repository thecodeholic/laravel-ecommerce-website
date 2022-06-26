<x-app-layout>
    <div class="w-[400px] mx-auto p-6 my-16">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <h2 class="text-2xl font-semibold text-center mb-5">
                Enter or Email to reset password
            </h2>
            <p class="text-center text-gray-500 mb-6">
                or
                <a
                    href="{{ route('login') }}"
                    class="text-sm text-purple-700 hover:text-purple-600"
                >login with existing account</a
                >
            </p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Your Email Address"
                         :value="old('email')" required
                         autofocus/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>
