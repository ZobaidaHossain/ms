<?php

namespace Database\Seeders;

use App\Models\Auth\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Module::insert([
            [
                'name' => 'Dashboard Management',
                'created_at' => now()
            ],
            [
                'name' => 'Super User Management',
                'created_at' => now()
            ],
            [
                'name' => 'User Management',
                'created_at' => now()
            ],
            [
                'name' => 'Roles Management',
                'created_at' => now()
            ],
            [
                'name' => 'Slider Management',
                'created_at' => now()
            ]
        ]);
    }
}
