<x-layouts.admin>
    <h1 id="warranties-heading" tabindex="0">{{ __('Warranties') }}</h1>
    @if(session('success'))
        <div role="alert" aria-live="polite" class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('warranties.create') }}" class="btn btn-primary">Add Warranty</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Order</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($warranties as $warranty)
                <tr>
                    <td>{{ $warranty->id }}</td>
                    <td>{{ $warranty->product_id }}</td>
                    <td>{{ $warranty->order_id }}</td>
                    <td>{{ $warranty->start_date }}</td>
                    <td>{{ $warranty->end_date }}</td>
                    <td>{{ $warranty->status }}</td>
                    <td>
                        <a href="{{ route('warranties.show', $warranty) }}" class="btn btn-info">View</a>
                        <a href="{{ route('warranties.edit', $warranty) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('warranties.destroy', $warranty) }}" method="POST" style="display:inline;">
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
