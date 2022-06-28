@props(['title' => false])

<x-app-layout>
    <div class="container w-full mx-auto">
        <div class="flex justify-between items-center">
            @if (isset($header) and $header)
                {{$header}}
            @elseif($title)
                <h1 class="text-3xl font-bold mb-6">{{$title}}</h1>
            @endif
        </div>

        <div class="bg-white p-3 rounded-md shadow-md">
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
