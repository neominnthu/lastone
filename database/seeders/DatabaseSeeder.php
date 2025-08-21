<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User seeding handled by DemoRolesAndUsersSeeder
        $this->call([
            DemoRolesAndUsersSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            InventorySeeder::class,
            WarrantySeeder::class,
            DemoInventoriesSeeder::class,
            DemoWarrantiesSeeder::class,
            WalletSeeder::class,
            DemoPosTransactionsSeeder::class,
        ]);
    }
}
