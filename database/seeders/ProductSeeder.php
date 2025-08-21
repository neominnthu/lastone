<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'CCTV Camera Pro', 'sku' => 'CAM-PRO-001', 'price' => 199.99, 'stock' => 50],
            ['name' => 'DVR Recorder', 'sku' => 'DVR-REC-002', 'price' => 299.99, 'stock' => 30],
            ['name' => 'Wireless Sensor', 'sku' => 'SENS-WIRE-003', 'price' => 49.99, 'stock' => 100],
        ];
        foreach ($products as $data) {
            \App\Models\Product::firstOrCreate(['sku' => $data['sku']], $data);
        }
    }
}
