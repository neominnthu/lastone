<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class PosCheckoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_pos_checkout_adds_order()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create(['price' => 100]);
        $this->actingAs($user);
        $response = $this->post('/pos/checkout', [
            'product_id' => $product->id,
            'quantity' => 2,
        ]);
        $response->assertSessionHas('message', 'Checkout complete!');
        $this->assertDatabaseHas('orders', [
            'customer_id' => $user->id,
            'product_id' => $product->id,
            'quantity' => 2,
            'total' => 200,
        ]);
    }
}
