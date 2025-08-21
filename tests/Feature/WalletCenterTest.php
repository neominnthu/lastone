<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Wallet;

class WalletCenterTest extends TestCase
{
    use RefreshDatabase;

    public function test_wallet_center_displays_balance()
    {
        $user = User::factory()->create();
        Wallet::create([
            'user_id' => $user->id,
            'balance' => 123.45,
            'type' => 'main',
            'description' => 'Test wallet',
        ]);
        $this->actingAs($user);
        $response = $this->get('/dashboard'); // Adjust route as needed
        $response->assertSee('123.45');
    }
}
