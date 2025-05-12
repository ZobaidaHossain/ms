<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;
use App\Models\Auth\RolePermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        foreach (Permission::all() as $key => $permission) {
            RolePermission::insert(['role_id' => '1', 'permission_id' => $permission->id, 'created_at' => now()]);
        }
        RolePermission::insert(['role_id' => '2', 'permission_id' => '1','created_at' => now()]);
        RolePermission::insert(['role_id' => '3', 'permission_id' => '1','created_at' => now()]);
    }
}
