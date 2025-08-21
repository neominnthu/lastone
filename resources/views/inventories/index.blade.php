<x-layouts.admin>
    <h1 id="inventories-heading" tabindex="0">{{ __('Inventories') }}</h1>
    @if(session('success'))
        <div role="alert" aria-live="polite" class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('inventories.create') }}" class="btn btn-primary">Add Inventory</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $inventory->product_id }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->location }}</td>
                    <td>
                        <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-info">View</a>
                        <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" style="display:inline;">
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
