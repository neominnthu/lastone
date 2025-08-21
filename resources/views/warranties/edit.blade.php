<x-layouts.admin>
    <h1>Edit Warranty</h1>
    <form method="POST" action="{{ route('warranties.update', $warranty) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Product ID</label>
            <input type="text" name="product_id" value="{{ $warranty->product_id }}" required>
        </div>
        <div>
            <label>Order ID</label>
            <input type="text" name="order_id" value="{{ $warranty->order_id }}">
        </div>
        <div>
            <label>Start Date</label>
            <input type="date" name="start_date" value="{{ $warranty->start_date }}" required>
        </div>
        <div>
            <label>End Date</label>
            <input type="date" name="end_date" value="{{ $warranty->end_date }}" required>
        </div>
        <div>
            <label>Status</label>
            <input type="text" name="status" value="{{ $warranty->status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-layouts.admin>
