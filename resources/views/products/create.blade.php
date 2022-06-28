<x-app-layout>
    <div class="container w-full mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold mb-6">Create new Product</h1>
        </div>

        <div class="bg-white p-3 rounded-md shadow-md">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="product_title">Title</label>
                    <x-input id="product_title"
                             class="block mt-1 w-full"
                             type="text"
                             name="title"/>
                </div>

                <div class="mb-3">
                    <label for="product_description">Description</label>
                    <x-textarea id="product_description"
                                class="block mt-1 w-full"
                                type="text"
                                name="description"></x-textarea>
                </div>

                <div class="mb-3">
                    <label for="product_price">Price</label>
                    <x-input id="product_price"
                             type="number"
                             class="block mt-1 w-full"
                             name="price"></x-input>
                </div>

                <div class="mb-3">
                    <label for="discount_pct">Discount %</label>
                    <x-input id="discount_pct"
                             type="text"
                             class="block mt-1 w-full"
                             name="discount_pct"></x-input>
                </div>

                <div class="mb-3">
                    <label for="discounted_price">Discounted Price</label>
                    <x-input id="discounted_price"
                             type="text"
                             class="block mt-1 w-full"
                             name="discounted_price"></x-input>
                </div>

                <x-button>Submit</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
