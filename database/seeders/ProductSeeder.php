<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Product 1',
                'slug' => 'product-1',
                'stock' => 100,
                'price' => 200000.00,
                'main_image' => null,
                'short_description' => 'Short description of product 1',
                'description' => 'Detailed description of product 1',
                'discount_id' => 1,
            ],
            [
                'name' => 'Product 2',
                'slug' => 'product-2',
                'stock' => 50,
                'price' => 150000.00,
                'main_image' => null,
                'short_description' => 'Short description of product 2',
                'description' => 'Detailed description of product 2',
                'discount_id' => 2,
            ],
        ]);

        DB::table('tag_product_mappings')->insert([
            ['product_id' => 1, 'tag_product_id' => 1],
            ['product_id' => 1, 'tag_product_id' => 2],
            ['product_id' => 2, 'tag_product_id' => 3],
        ]);

        DB::table('category_product_mappings')->insert([
            ['product_id' => 1, 'category_product_id' => 1],
            ['product_id' => 1, 'category_product_id' => 2],
            ['product_id' => 2, 'category_product_id' => 1],
        ]);
    }
}
