<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        Inventory::create([
            'product_id' => \App\Models\Product::first()->id ?? null,
            'quantity' => 100,
            'location' => 'Main Warehouse',
        ]);
    }
}
