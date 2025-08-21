<?php
namespace App\Services;

use App\Models\Order;
use App\Models\Inventory;
use App\Models\Warranty;

class ReportingService
{
    public static function getOrderStats()
    {
        return [
            'total_orders' => Order::count(),
            'pending_orders' => Order::where('status', 'pending')->count(),
            'completed_orders' => Order::where('status', 'completed')->count(),
        ];
    }

    public static function getInventoryStats()
    {
        return [
            'total_items' => Inventory::count(),
            'low_stock' => Inventory::where('quantity', '<', 10)->count(),
        ];
    }

    public static function getWarrantyStats()
    {
        return [
            'active_warranties' => Warranty::where('status', 'active')->count(),
            'expired_warranties' => Warranty::where('end_date', '<', now())->count(),
        ];
    }
}
