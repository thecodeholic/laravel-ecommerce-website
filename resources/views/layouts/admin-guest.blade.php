<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body>

<main>
    {{ $slot }}
</main>

</body>
</html>
