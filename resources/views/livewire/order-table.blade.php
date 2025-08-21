<div>
    <h2 id="order-table-heading" tabindex="0">{{ __('Orders') }}</h2>
    <input type="text" wire:model="search" placeholder="{{ __('Search status...') }}" aria-label="{{ __('Search status') }}" />
    <table class="table" aria-describedby="order-table-heading">
        <thead>
            <tr>
                <th wire:click="sortBy('id')" role="button" tabindex="0">ID</th>
                <th wire:click="sortBy('customer_id')" role="button" tabindex="0">Customer</th>
                <th wire:click="sortBy('product_id')" role="button" tabindex="0">Product</th>
                <th wire:click="sortBy('quantity')" role="button" tabindex="0">Quantity</th>
                <th wire:click="sortBy('total')" role="button" tabindex="0">Total</th>
                <th wire:click="sortBy('status')" role="button" tabindex="0">Status</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
