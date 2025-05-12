<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'title' => 'দক্ষ জনবল গঠনে প্রশিক্ষণ প্রদান',
                'title_en'=>'Providing Training To Build Skilled Manpower',
                'icon_class' => 'bx bx-chalkboard',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'জনসচেতনতামূলক কার্যক্রম',
                'title_en'=>'Public Awareness Activities',
                'icon_class' => 'bx bx-target-lock',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'ফ্রি মেডিকেল সার্ভিস',
                'title_en'=>'Free Medical Services',
                'icon_class' => 'bx bx-donate-heart',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'অসহায় মানুষদের আর্থিক সহায়তা প্রদান',
                'title_en'=>'Providing Financial Assistance To Needy People',
                'icon_class' => 'bx bx-money',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'হস্তশিল্প কার্যক্রম পরিচালনা',
                'title_en'=>'Conducting Handicraft Activities',
                'icon_class' => 'bx bx-cog',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'স্যানিটেশন ব্যবস্থার উন্নয়ন',
                'title_en'=>'Improvement Of Sanitation System',
                'icon_class' => 'bx bx-shower',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'গ্রামীন নারীদের ই-কমার্স সহায়তা প্রদান',
                'title_en'=>'Providing E-commerce Support To Rural Women',
                'icon_class' => 'bx bx-card',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'ই লার্নিং কার্যক্রম পরিচালনা করা। ',
                'title_en'=>'Conducting E-Learning Activities.',
                'icon_class' => 'bx bx-slideshow',
                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'প্রবীণ নবীন বন্ধুত্ব ও মূল্যবোধ চর্চা',
                'title_en'=>'Old-Young Friendship And Values ​Practice',
                'icon_class' => 'bx bx-group',
                 'status' => 1,
                'created_at' => now()
            ],
        ]);
    }
}
