<x-layouts.admin>
    <h1>Add Warranty</h1>
    <form method="POST" action="{{ route('warranties.store') }}">
        @csrf
        <div>
            <label>Product ID</label>
            <input type="text" name="product_id" required>
        </div>
        <div>
            <label>Order ID</label>
            <input type="text" name="order_id">
        </div>
        <div>
            <label>Start Date</label>
            <input type="date" name="start_date" required>
        </div>
        <div>
            <label>End Date</label>
            <input type="date" name="end_date" required>
        </div>
        <div>
            <label>Status</label>
            <input type="text" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</x-layouts.admin>
