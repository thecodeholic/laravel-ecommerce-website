@props(['disabled' => false, 'errors', 'label' => false])
<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<?php
    $errorClasses = 'border-red-600 focus:border-red-600 ring-1 ring-red-600 focus:ring-red-600';
    $defaultClasses = '';
    $successClasses = 'border-emerald-500 focus:border-emerald-500 ring-1 ring-emerald-500 focus:ring-emerald-500';
?>
@if ($label)
    <label>{{$label}}</label>
@endif
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'px-4 w-full border-2 py-2 rounded-md text-sm outline-none ' .
     ($errors->has($attributes['name']) ? $errorClasses : (old($attributes['name']) ? $successClasses :$defaultClasses))
]) !!}>
@error($attributes['name'])
    <small class="text-red-600"> {{ $message }}</small>
@enderror
