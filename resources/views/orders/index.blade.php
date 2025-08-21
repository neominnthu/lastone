<x-layouts.admin>
    <h1 id="orders-heading" tabindex="0">{{ __('Orders') }}</h1>
    @if(session('success'))
        <div role="alert" aria-live="polite" class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Add Order</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_id }}</td>
                    <td>{{ $order->product_id }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order) }}" class="btn btn-info">View</a>
                        <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.admin>
