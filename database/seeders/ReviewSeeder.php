<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::insert([
            ['user_id' => 1, 'product_id' => 1, 'rating' => 5, 'comment' => 'Excellent product!'],
            ['user_id' => 1, 'product_id' => 2, 'rating' => 4, 'comment' => 'Very good, but could be better.'],
        ]);
    }
}
