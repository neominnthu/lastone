<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warranty;
use App\Models\Product;
use App\Models\Order;

class DemoWarrantiesSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::first();
        $order = Order::first();
        if ($product && $order) {
            Warranty::create([
                'product_id' => $product->id,
                'order_id' => $order->id,
                'start_date' => now(),
                'end_date' => now()->addYear(),
                'status' => 'active',
            ]);
        }
    }
}
