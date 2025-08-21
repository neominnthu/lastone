<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;

class DemoPosTransactionsSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $products = \App\Models\Product::all();
        foreach ($users as $user) {
            for ($i = 0; $i < 3; $i++) {
                $product = $products->random();
                Order::create([
                    'id' => (string) Str::uuid(),
                    'customer_id' => $user->id,
                    'product_id' => $product->id,
                    'quantity' => rand(1, 5),
                    'total' => $product->price * rand(1, 5),
                    'status' => 'completed',
                ]);
            }
        }
    }
}
