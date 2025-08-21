<div class="border rounded shadow p-4 mb-4">
    <h3 class="font-bold text-lg">{{ $product->name }}</h3>
    <p>SKU: {{ $product->sku }}</p>
    <p>Price: ${{ number_format($product->price, 2) }}</p>
    <p>Stock: {{ $product->stock }}</p>
    @if(isset($actions))
        <div class="mt-2">{{ $actions }}</div>
    @endif
</div>
