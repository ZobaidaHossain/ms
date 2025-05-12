<?php

namespace Database\Seeders;

use App\Models\Auth\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::insert(['name' => 'Super Admin', 'slug' => 'super-admin', 'status' => 1, 'created_at' => now()]);
        Role::insert(['name' => 'No Role', 'slug' => 'no-role', 'status' => 1, 'created_at' => now()]);
        Role::insert(['name' => 'Admin', 'slug' => 'admin', 'status' => 1, 'created_at' => now()]);
        Role::insert(['name' => 'Employee', 'slug' => 'employee', 'status' => 1, 'created_at' => now()]);
    }
}
