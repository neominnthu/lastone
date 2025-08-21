<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        \App\Models\Inventory::class => \App\Policies\InventoryPolicy::class,
        \App\Models\Order::class => \App\Policies\OrderPolicy::class,
        \App\Models\Warranty::class => \App\Policies\WarrantyPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
