<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class AuditLoggerTest extends TestCase
{
    use RefreshDatabase;

    public function test_audit_log_is_created_on_order_creation()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create(['price' => 100]);
        $this->actingAs($user);
        $response = $this->post('/pos/checkout', [
            'product_id' => $product->id,
            'quantity' => 2,
        ]);
        $response->assertSessionHas('message', 'Checkout complete!');
    $order = Order::where('customer_id', $user->id)->where('product_id', $product->id)->first();
    $this->assertNotNull($order);
    // Force audit log file creation
    Log::channel('audit')->info('TEST_FLUSH');
    $logFile = storage_path('logs/audit.log');
    $this->assertFileExists($logFile);
    $logContent = file_get_contents($logFile);
    $this->assertStringContainsString('order_created', $logContent);
    $this->assertStringContainsString($order->id, $logContent);
    $this->assertStringContainsString((string)$user->id, $logContent);
    }
}
