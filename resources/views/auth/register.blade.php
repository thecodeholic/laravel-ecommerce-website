<x-app-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <form
        action="{{ route('register') }}"
        method="post"
        class="w-[400px] mx-auto p-6 my-16"
    >
        @csrf

        <h2 class="text-2xl font-semibold text-center mb-4">Create an account</h2>
        <p class="text-center text-gray-500 mb-3">
            or
            <a
                href="{{ route('login') }}"
                class="text-sm text-purple-700 hover:text-purple-600"
            >login with existing account</a
            >
        </p>
        <div class="mb-4">
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Your Name"
                     :value="old('name')" required autofocus/>
        </div>
        </p>
        <div class="mb-4">
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Your Email"
                     :value="old('email')" required/>
        </div>
        <div class="mb-4">
            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     placeholder="Password"
                     required autocomplete="new-password"/>
        </div>
        </div>
        <div class="mb-4">
            <x-input id="password_confirmation" class="block mt-1 w-full"
                     type="password"
                     name="password_confirmation"
                     placeholder="Repeat Password"
                     required/>
        </div>

        <x-button>
            Signup
        </x-button>
    </form>
</x-app-layout>
