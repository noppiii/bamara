<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('oauth_providers')->insert([
            ['id' => 1, 'name' => 'Google', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Facebook', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
