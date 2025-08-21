<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productId = \App\Models\Product::first()->id ?? null;
        $orders = [
            [
                'customer_id' => \App\Models\User::where('email', 'customer@example.com')->first()->id ?? null,
                'product_id' => $productId,
                'quantity' => 1,
                'status' => 'pending',
                'total' => 299.99
            ],
            [
                'customer_id' => \App\Models\User::where('email', 'customer@example.com')->first()->id ?? null,
                'product_id' => $productId,
                'quantity' => 2,
                'status' => 'completed',
                'total' => 149.99
            ],
        ];
        foreach ($orders as $data) {
            if ($data['customer_id'] && $data['product_id']) {
                \App\Models\Order::create($data);
            }
        }
    }
}
