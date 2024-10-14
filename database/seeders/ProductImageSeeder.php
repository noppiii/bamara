<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::insert([
            ['product_id' => 1, 'image_path' => 'products1-min.jpg'],
            ['product_id' => 1, 'image_path' => 'products21-min.jpg'],
            ['product_id' => 1, 'image_path' => 'products35-min.jpg'],
        ]);

        ProductImage::insert([
            ['product_id' => 2, 'image_path' => 'images/product2_image1.jpg'],
            ['product_id' => 2, 'image_path' => 'images/product2_image2.jpg'],
        ]);
    }
}
