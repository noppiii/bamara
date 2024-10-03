<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            [
                'name' => 'view_dashboard',
                'description' => 'Permission to view the dashboard.',
            ],
            [
                'name' => 'manage_users',
                'description' => 'Permission to manage users.',
            ],
            [
                'name' => 'edit_settings',
                'description' => 'Permission to edit system settings.',
            ],
            [
                'name' => 'view_reports',
                'description' => 'Permission to view reports.',
            ],
        ]);
    }
}
