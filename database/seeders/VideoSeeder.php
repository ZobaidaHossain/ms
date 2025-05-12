<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Video::insert([
                [

                    'title' => 'আত্মবিশ্বাসী ছাত্রীরা',
                    'sub_title' => 'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
                    'description'=>'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
                    'title_en'=>'Confident Students',
                     'sub_title_en' => 'Confident students after training',
                    'description_en'=>'Confident students after completing the training',
                    'video' => 'video/video-1.mp4',
                    'category' => 'প্রশিক্ষণ',
                    'category_en'=>'Training',
                    'status' => 1,
                    'created_at' => now()
                ],
                [
                    'title' => 'আত্মবিশ্বাসী ছাত্রীরা',
                    'sub_title' => 'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
                    'description'=>'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
                    'title_en'=>'Confident Students',
                     'sub_title_en' => 'Confident students after training',
                    'description_en'=>'Confident students after completing the training',


                    'video' => 'video/video-2.mp4',
                    'category' => 'প্রশিক্ষণ',
                    'category_en'=>'Training',
                    'status' => 1,
                    'created_at' => now()
                ],
                [
                    'title' => 'আত্মবিশ্বাসী ছাত্রীরা',
                    'sub_title' => 'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
                    'description'=>'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
                    'title_en'=>'Confident Students',
                     'sub_title_en' => 'Confident students after training',
                    'description_en'=>'Confident students after completing the training',

                    'video' => 'video/2024-10-20-at.mp4',
                    'category' => 'প্রশিক্ষণ',
                    'category_en'=>'Training',
                    'status' => 1,
                    'created_at' => now()
                ],
            ]);




    }
}
