<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warranty;

class WarrantySeeder extends Seeder
{
    public function run(): void
    {
        Warranty::create([
            'product_id' => \App\Models\Product::first()->id ?? null,
            'order_id' => \App\Models\Order::first()->id ?? null,
            'start_date' => now(),
            'end_date' => now()->addYear(),
            'status' => 'active',
        ]);
    }
}
