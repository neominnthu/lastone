<x-layouts.admin>
    <h1>Warranty Details</h1>
    <ul>
        <li>ID: {{ $warranty->id }}</li>
        <li>Product ID: {{ $warranty->product_id }}</li>
        <li>Order ID: {{ $warranty->order_id }}</li>
        <li>Start Date: {{ $warranty->start_date }}</li>
        <li>End Date: {{ $warranty->end_date }}</li>
        <li>Status: {{ $warranty->status }}</li>
    </ul>
    <a href="{{ route('warranties.index') }}" class="btn btn-secondary">Back</a>
</x-layouts.admin>
