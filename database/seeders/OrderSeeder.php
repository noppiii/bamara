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
            [
                'user_id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'address' => '123 Main Street',
                'detail_address' => 'Apt 4B',
                'email' => 'john.doe@example.com',
                'phone' => '08123456789',
                'status' => 'completed',
                'total_price' => 400000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'address' => '456 Elm Street',
                'detail_address' => null,
                'email' => 'jane.smith@example.com',
                'phone' => '08198765432',
                'status' => 'pending',
                'total_price' => 150000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
