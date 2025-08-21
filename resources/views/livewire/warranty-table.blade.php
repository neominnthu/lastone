<div>
    <h2 id="warranty-table-heading" tabindex="0">{{ __('Warranties') }}</h2>
    <input type="text" wire:model="search" placeholder="{{ __('Search status...') }}" aria-label="{{ __('Search status') }}" />
    <table class="table" aria-describedby="warranty-table-heading">
        <thead>
            <tr>
                <th wire:click="sortBy('id')" role="button" tabindex="0">ID</th>
                <th wire:click="sortBy('product_id')" role="button" tabindex="0">Product</th>
                <th wire:click="sortBy('order_id')" role="button" tabindex="0">Order</th>
                <th wire:click="sortBy('start_date')" role="button" tabindex="0">Start Date</th>
                <th wire:click="sortBy('end_date')" role="button" tabindex="0">End Date</th>
                <th wire:click="sortBy('status')" role="button" tabindex="0">Status</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
