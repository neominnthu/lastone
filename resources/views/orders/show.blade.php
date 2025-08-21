<x-layouts.admin>
    <h1>Order Details</h1>
    <ul>
        <li>ID: {{ $order->id }}</li>
        <li>Customer ID: {{ $order->customer_id }}</li>
        <li>Product ID: {{ $order->product_id }}</li>
        <li>Quantity: {{ $order->quantity }}</li>
        <li>Total: {{ $order->total }}</li>
        <li>Status: {{ $order->status }}</li>
    </ul>
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
</x-layouts.admin>
