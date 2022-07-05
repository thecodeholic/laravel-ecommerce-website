@props(['href'])

<li>
    <a
        href="{{$href}}"
        {{ $attributes->class(['block font-light text-sm py-2 px-4 transition-colors hover:bg-slate-800 flex items-center']) }}
    >
        <div class="mr-2">
            {{ $icon ?? '' }}
        </div>
        {{$slot}}
    </a>
</li>
