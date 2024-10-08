<?php

namespace Database\Seeders;

use App\Models\DiscountProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiscountProduct::insert([
            ['name' => 'Discount 1', 'percentage' => 10.00, 'amount' => null],
            ['name' => 'Discount 2', 'percentage' => null, 'amount' => 50000.00],
            ['name' => 'Discount 3', 'percentage' => 15.00, 'amount' => null],
        ]);
    }
}
