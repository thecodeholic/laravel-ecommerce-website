@props([
    'size' => 'default',
    'variant' => 'primary'
])

<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'flex items-center btn-primary'.
        ($size == 'sm' ? ' px-2 py-1 text-sm' : '').
        ($variant === 'primary' ? ' bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700' : '').
        ($variant === 'info' ? ' bg-blue-500 hover:bg-blue-600 active:bg-blue-700' : '').
        ($variant === 'danger' ? ' bg-red-500 hover:bg-red-600 active:bg-red-700' : '')
]) }}>
    {{ $slot }}
</button>
