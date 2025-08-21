<x-layouts.admin>
    <h1>Add Inventory</h1>
    <form method="POST" action="{{ route('inventories.store') }}">
        @csrf
        <div>
            <label>Product ID</label>
            <input type="text" name="product_id" required>
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="quantity" required>
        </div>
        <div>
            <label>Location</label>
            <input type="text" name="location">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-layouts.admin>
