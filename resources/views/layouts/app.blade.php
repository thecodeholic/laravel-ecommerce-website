<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel E-commerce Website') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body x-data="productList">
@include('layouts.navigation')

<main class="p-5">
    {{ $slot }}
</main>

<div
    class="fixed flex justify-between items-center left-1/2 top-16 -translate-x-1/2 z-40 shadow-xl bg-green-600 text-white py-3 px-4 rounded"
    x-show="notification.show"
    style="display: none"
>
    <span x-text="notification.message"></span>
    <button
        class="w-6 h-6 ml-4 flex justify-center items-center rounded-full transition-colors hover:bg-black/20"
        @click="notification.show = false"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
            />
        </svg>
    </button>
</div>
</body>
</html>
