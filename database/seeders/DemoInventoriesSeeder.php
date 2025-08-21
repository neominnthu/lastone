<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;
use App\Models\Product;

class DemoInventoriesSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::first();
        if ($product) {
            Inventory::create([
                'product_id' => $product->id,
                'quantity' => 50,
                'location' => 'Main Warehouse',
            ]);
        }
    }
}
