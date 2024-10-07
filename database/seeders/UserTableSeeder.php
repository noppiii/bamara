<?php

namespace Database\Seeders;

use App\Models\Auth\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();
        $userRole = Role::where('name', 'User')->first();

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id,
            'status_account' => 'active'
        ]);

        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role_id' => $userRole->id,
            'status_account' => 'active'
        ]);
    }
}
