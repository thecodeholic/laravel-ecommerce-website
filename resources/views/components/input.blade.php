@props(['disabled' => false, 'errors'])
<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */
?>
<?php
    $errorClasses = 'border-red-600 focus:border-red-600 ring-1 ring-red-600 focus:ring-red-600';
    $defaultClasses = 'focus:ring-purple-500 focus:border-purple-500';
    $successClasses = 'border-emerald-500 focus:border-emerald-500 ring-1 ring-emerald-500 focus:ring-emerald-500';
?>

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:outline-none rounded-md w-full ' .
     ($errors->has($attributes['name']) ? $errorClasses : (old($attributes['name']) ? $successClasses :$defaultClasses))
]) !!}>
@error($attributes['name'])
    <small class="text-red-600"> {{ $message }}</small>
@enderror
