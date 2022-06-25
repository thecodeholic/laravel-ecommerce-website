@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'py-2 px-4 bg-red-500 text-white rounded']) }} >
        <div class="font-medium">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
