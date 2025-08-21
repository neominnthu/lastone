<x-layouts.admin>
    <h1 id="report-heading" tabindex="0">{{ __('Reports') }}</h1>
    <section aria-labelledby="order-stats-heading">
        <h2 id="order-stats-heading">{{ __('Order Stats') }}</h2>
        <ul>
            <li>{{ __('Total Orders') }}: {{ $orderStats['total_orders'] }}</li>
            <li>{{ __('Pending Orders') }}: {{ $orderStats['pending_orders'] }}</li>
            <li>{{ __('Completed Orders') }}: {{ $orderStats['completed_orders'] }}</li>
        </ul>
    </section>
    <section aria-labelledby="inventory-stats-heading">
        <h2 id="inventory-stats-heading">{{ __('Inventory Stats') }}</h2>
        <ul>
            <li>{{ __('Total Items') }}: {{ $inventoryStats['total_items'] }}</li>
            <li>{{ __('Low Stock') }}: {{ $inventoryStats['low_stock'] }}</li>
        </ul>
    </section>
    <section aria-labelledby="warranty-stats-heading">
        <h2 id="warranty-stats-heading">{{ __('Warranty Stats') }}</h2>
        <ul>
            <li>{{ __('Active Warranties') }}: {{ $warrantyStats['active_warranties'] }}</li>
            <li>{{ __('Expired Warranties') }}: {{ $warrantyStats['expired_warranties'] }}</li>
        </ul>
    </section>
</x-layouts.admin>
