<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel E-commerce Website') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <script defer src="{{ asset('js/app.js') }}"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="h-full flex flex-col" x-data="{mobileMenuOpen: true}">
<header
    class="flex justify-between bg-white shadow-md"
>
    <div class="w-[180px] flex justify-between">
        <div class="flex-1 flex justify-center items-center">
            <a href="/src" class="block pl-5"> Logo </a>
        </div>

        <button
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="p-3 block"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>
    </div>
    <nav class="flex items-center text-gray-700">
        <ul class="grid grid-flow-col items-center">
            <li x-data="{open: false}" class="relative text-sm">
                <a
                    @click="open = !open"
                    class="cursor-pointer flex items-center p-4 hover:bg-gray-100"
                >
                    <img src="https://randomuser.me/api/portraits/men/22.jpg" class="w-8 mr-2 rounded-full">
                    My Account
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 ml-2"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </a>
                <ul
                    @click.outside="open = false"
                    x-show="open"
                    x-transition
                    x-cloak
                    class="absolute z-10 right-0 bg-white py-2 w-48"
                >
                    <li>
                        <a
                            href="/src/profile.html"
                            class="flex px-3 py-2 hover:bg-gray-100"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                />
                            </svg>
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a
                            href="/src/watchlist.html"
                            class="flex items-center justify-between px-3 py-2 hover:bg-gray-100"
                        >
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                    />
                                </svg>
                                Watchlist
                            </div>

                            <small
                                x-show="$store.header.watchlistItems"
                                x-transition
                                x-text="$store.header.watchlistItems"
                                class="py-[2px] px-[8px] rounded-full bg-red-500"
                            ></small>
                        </a>
                    </li>
                    <li>
                        <a
                            href="/src/orders.html"
                            class="flex px-3 py-2 hover:bg-gray-100"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                />
                            </svg>
                            My Orders
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                               class="flex px-3 py-2 hover:bg-gray-100"
                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                    />
                                </svg>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<main class="flex flex-1">
    @include('admin.sidebar')
    <div class="flex flex-1 p-4">
        {{ $slot }}
    </div>
</main>

</body>
</html>
