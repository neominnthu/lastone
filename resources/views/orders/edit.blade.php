<x-layouts.admin>
    <h1>Edit Order</h1>
    <form method="POST" action="{{ route('orders.update', $order) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Customer ID</label>
            <input type="text" name="customer_id" value="{{ $order->customer_id }}" required>
        </div>
        <div>
            <label>Product ID</label>
            <input type="text" name="product_id" value="{{ $order->product_id }}" required>
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="quantity" value="{{ $order->quantity }}" required>
        </div>
        <div>
            <label>Total</label>
            <input type="number" step="0.01" name="total" value="{{ $order->total }}" required>
        </div>
        <div>
            <label>Status</label>
            <input type="text" name="status" value="{{ $order->status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-layouts.admin>
