<?php

namespace Database\Seeders;

use App\Models\TagProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagProduct::insert([
            ['name' => 'Tag 1', 'slug' => 'tag-1'],
            ['name' => 'Tag 2', 'slug' => 'tag-2'],
            ['name' => 'Tag 3', 'slug' => 'tag-3'],
        ]);
    }
}
