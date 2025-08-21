<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class NotificationCenterTest extends TestCase
{
    use RefreshDatabase;

    public function test_notification_center_displays_demo_notifications()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/dashboard'); // Adjust route as needed
        $response->assertSee('Welcome to the CCTV Master Portal!');
        $response->assertSee('Your last order was delivered.');
        $response->assertSee('Payment failed for invoice #123.');
        $response->assertSee('Warranty expiring soon.');
    }
}
