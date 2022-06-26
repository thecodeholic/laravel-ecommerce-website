@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'py-2 px-4 bg-emerald-500 text-white rounded']) }}>
        {{ $status }}
    </div>
@endif
