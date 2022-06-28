<?php

$product = new \App\Models\Product();

?>

<x-vendor-layout title="Create new Product">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        @include('products.form')

        <x-button>Submit</x-button>
    </form>
</x-vendor-layout>
