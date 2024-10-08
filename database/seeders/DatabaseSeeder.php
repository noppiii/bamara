<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OauthProvidersSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            RolePermissionsTableSeeder::class,
            UserTableSeeder::class,
            CategoryProductSeeder::class,
            TagProductSeeder::class,
            DiscountProductSeeder::class,
            ProductSeeder::class,
            WishlistSeeder::class,
            CartSeeder::class,
            ReviewSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            ProductImageSeeder::class
        ]);
    }
}
