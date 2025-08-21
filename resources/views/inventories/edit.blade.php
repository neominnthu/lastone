<x-layouts.admin>
    <h1>Edit Inventory</h1>
    <form method="POST" action="{{ route('inventories.update', $inventory) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Product ID</label>
            <input type="text" name="product_id" value="{{ $inventory->product_id }}" required>
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="quantity" value="{{ $inventory->quantity }}" required>
        </div>
        <div>
            <label>Location</label>
            <input type="text" name="location" value="{{ $inventory->location }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-layouts.admin>
