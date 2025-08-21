<x-layouts.admin>
    <h1>Inventory Details</h1>
    <ul>
        <li>ID: {{ $inventory->id }}</li>
        <li>Product ID: {{ $inventory->product_id }}</li>
        <li>Quantity: {{ $inventory->quantity }}</li>
        <li>Location: {{ $inventory->location }}</li>
    </ul>
    <a href="{{ route('inventories.index') }}" class="btn btn-secondary">Back</a>
</x-layouts.admin>
