<x-layouts.admin>
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Product Catalog</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($products as $product)
                <x-product-card :product="$product">
                    <x-slot name="actions">
                        <a href="{{ route('products.edit', $product) }}" class="text-blue-700 hover:underline">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-700 hover:underline ml-2">Delete</button>
                        </form>
                    </x-slot>
                </x-product-card>
            @endforeach
        </div>
        <a href="{{ route('products.create') }}" class="mt-6 inline-block bg-blue-900 text-white px-4 py-2 rounded">Add Product</a>
    </div>
</x-layouts.admin>
