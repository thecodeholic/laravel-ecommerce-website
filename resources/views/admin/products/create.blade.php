<?php

$product = new \App\Models\Product();

?>

<x-admin-layout title="Create new Product">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        @include('admin.products.form')

        <x-button>Submit</x-button>
    </form>
</x-admin-layout>
