<div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded shadow" aria-labelledby="pos-heading">
    <h2 id="pos-heading" tabindex="0" class="text-xl font-bold mb-4">{{ __('POS Checkout (Demo)') }}</h2>
    @if (session()->has('message'))
        <div role="alert" aria-live="polite" class="mb-4 p-2 bg-green-100 text-green-800 rounded">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="addToCart" class="mb-6" aria-label="{{ __('Add product to cart') }}">
        <div class="mb-4">
            <label for="product" class="block text-gray-700">{{ __('Product') }}</label>
            <input type="text" id="product" wire:model="product" class="w-full border rounded px-3 py-2" required aria-required="true">
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-gray-700">{{ __('Quantity') }}</label>
            <input type="number" id="quantity" wire:model="quantity" class="w-full border rounded px-3 py-2" min="1" required aria-required="true">
        </div>
        <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded">{{ __('Add to Cart') }}</button>
    </form>
    <div>
        <h3 class="font-semibold mb-2">{{ __('Cart') }}</h3>
        <ul>
            @foreach($cart as $item)
                <li>{{ $item['product'] }} x {{ $item['quantity'] }}</li>
            @endforeach
        </ul>
        @if(count($cart) > 0)
            <button wire:click="checkout" class="mt-4 bg-green-700 text-white px-4 py-2 rounded" aria-label="{{ __('Checkout') }}">{{ __('Checkout') }}</button>
        @endif
    </div>
</div>
