<x-layouts.admin>
    <h1>Add Order</h1>
    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div>
            <label>Customer ID</label>
            <input type="text" name="customer_id" required>
        </div>
        <div>
            <label>Product ID</label>
            <input type="text" name="product_id" required>
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="quantity" required>
        </div>
        <div>
            <label>Total</label>
            <input type="number" step="0.01" name="total" required>
        </div>
        <div>
            <label>Status</label>
            <input type="text" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-layouts.admin>
