<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::insert([
            ['user_id' => 1, 'status' => 'completed', 'total_price' => 400000.00],
            ['user_id' => 1, 'status' => 'pending', 'total_price' => 150000.00],
        ]);
    }
}
