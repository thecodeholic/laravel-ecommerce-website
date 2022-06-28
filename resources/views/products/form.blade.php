<div class="mb-3">
    <label for="product_title">Title</label>
    <x-input id="product_title"
             class="block mt-1 w-full"
             type="text"
             :value="old('title') ?: $product->title"
             name="title"/>
</div>

<div class="mb-3">
    <label for="product_description">Description</label>
    <x-textarea id="product_description"
                class="block mt-1 w-full"
                type="text"
                name="description">{{old('description') ?: $product->description}}</x-textarea>
</div>

<div class="mb-3">
    <label for="product_price">Price</label>
    <x-input id="product_price"
             type="number"
             :value="old('price') ?: $product->price"
             class="block mt-1 w-full"
             name="price"></x-input>
</div>

<div class="mb-3">
    <label for="discount_pct">Discount %</label>
    <x-input id="discount_pct"
             type="number"
             :value="old('discount_pct') ?: $product->discount_pct"
             class="block mt-1 w-full"
             name="discount_pct"></x-input>
</div>

<div class="mb-3">
    <label for="discounted_price">Discounted Price</label>
    <x-input id="discounted_price"
             type="number"
             :value="old('discounted_price') ?: $product->discounted_price"
             class="block mt-1 w-full"
             name="discounted_price"></x-input>
</div>
