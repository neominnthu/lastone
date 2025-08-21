<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoRolesAndUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'super-admin', 'admin', 'manager', 'sales', 'technician', 'customer'
        ];
        foreach ($roles as $role) {
            \Spatie\Permission\Models\Role::firstOrCreate(['name' => $role]);
        }

        $users = [
            ['name' => 'Super Admin', 'email' => 'superadmin@example.com', 'role' => 'super-admin'],
            ['name' => 'Admin', 'email' => 'admin@example.com', 'role' => 'admin'],
            ['name' => 'Manager', 'email' => 'manager@example.com', 'role' => 'manager'],
            ['name' => 'Sales', 'email' => 'sales@example.com', 'role' => 'sales'],
            ['name' => 'Technician', 'email' => 'technician@example.com', 'role' => 'technician'],
            ['name' => 'Customer', 'email' => 'customer@example.com', 'role' => 'customer'],
        ];
        foreach ($users as $userData) {
            $user = \App\Models\User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => bcrypt('password'),
                ]
            );
            $user->assignRole($userData['role']);
        }
    }
}
