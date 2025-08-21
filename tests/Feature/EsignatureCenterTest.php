<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Esignature;

class EsignatureCenterTest extends TestCase
{
    use RefreshDatabase;

    public function test_esignature_submission()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->post('/esignature/submit', [
            'signature' => 'Test Signature',
        ]);
        $response->assertSessionHas('message', 'Signature submitted successfully!');
        $this->assertDatabaseHas('esignatures', [
            'user_id' => $user->id,
            'signature' => 'Test Signature',
        ]);
    }
}
