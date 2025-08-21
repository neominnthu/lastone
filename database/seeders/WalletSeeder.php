<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Str;

class WalletSeeder extends Seeder
{
    public function run(): void
    {
        // Assign wallets to all users
        foreach (User::all() as $user) {
            Wallet::updateOrCreate([
                'user_id' => $user->id,
            ], [
                'balance' => rand(100, 10000) / 100,
                'type' => 'main',
                'description' => 'Demo wallet',
            ]);
        }
    }
}
