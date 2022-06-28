<x-vendor-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-semibold mb-6">Update Product: "{{ $product->title }}"</h1>
        <form class="block" action="{{ route('products.destroy', $product) }}" method="POST"
              onsubmit="return confirm('{{ trans('Are You Sure you want to delete the product? ') }}');">

            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <x-button variant="danger">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 mr-2"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                    />
                </svg>
                Delete Product
            </x-button>
        </form>
    </x-slot>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        @include('products.form')

        <x-button>Submit</x-button>
    </form>
</x-vendor-layout>
