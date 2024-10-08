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
            ['product_id' => 1, 'image_path' => 'images/product1_image1.jpg'],
            ['product_id' => 1, 'image_path' => 'images/product1_image2.jpg'],
            ['product_id' => 1, 'image_path' => 'images/product1_image3.jpg'],
        ]);

        ProductImage::insert([
            ['product_id' => 2, 'image_path' => 'images/product2_image1.jpg'],
            ['product_id' => 2, 'image_path' => 'images/product2_image2.jpg'],
        ]);
    }
}
