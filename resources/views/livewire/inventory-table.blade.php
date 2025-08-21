<div>
    <h2 id="inventory-table-heading" tabindex="0">{{ __('Inventories') }}</h2>
    <input type="text" wire:model="search" placeholder="{{ __('Search location...') }}" aria-label="{{ __('Search location') }}" />
    <table class="table" aria-describedby="inventory-table-heading">
        <thead>
            <tr>
                <th wire:click="sortBy('id')" role="button" tabindex="0">ID</th>
                <th wire:click="sortBy('product_id')" role="button" tabindex="0">Product</th>
                <th wire:click="sortBy('quantity')" role="button" tabindex="0">Quantity</th>
                <th wire:click="sortBy('location')" role="button" tabindex="0">Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $inventory->product_id }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->location }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
