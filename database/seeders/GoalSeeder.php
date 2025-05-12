<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goal::insert([
[
    'serial'=>'০১',
    'title'=>'আমাদের ভিশন',
    'subtitle'=>'গ্রামীন অনগ্রসর জনগোষ্ঠীর উন্নত জীবনমান অর্জনের লক্ষ্যে নারীর ক্ষমতায়ন ও শিশু সুরক্ষা করে মানবিক ও প্রাকৃতিক পরিবেশ নিশ্চিতকরণ।',
    'serial_en' => '01',
                'title_en' => 'Our Vision',
                'subtitle_en' => 'Ensuring a humane and natural environment through empowering women and ensuring child protection to achieve an improved standard of living for the rural underprivileged communities.',
],
[
    'serial'=>'০২',
    'title'=>'আমাদের মিশন',
    'subtitle'=>'নারীর প্রতি সহিংসতা, নিপীড়ন ও শিশুদের অনিশ্চিত জীবনের অন্ধকার দূরীকরনে নারী আত্মকর্মসংস্থানের লক্ষ্যে দক্ষতা অর্জন প্রশিক্ষণ প্রদান। নারীর আত্মনির্ভরশীলতা অর্জনের মাধ্যমে পরিবারে আর্থিক স্বচ্ছলতা আনায়ন ও শিশু নিরাপত্তা বিধান করে সমাজে নারী-পুরুষ, নবীণ-প্রবীণ সহমর্মিতার ভিত্তিতে একটি মানবিক ও প্রাকৃতিক পরিবেশ রক্ষা করা।',
    'serial_en' => '02',
    'title_en' => 'Our Mission',
    'subtitle_en' => 'Providing skill development training for women’s self-employment to eliminate violence, oppression, and uncertainty from children’s lives. Achieving women’s self-reliance to bring financial stability to families and ensuring child safety, thereby maintaining a humane and natural environment based on mutual respect between men and women, young and old in society.',
],

        ]);
    }
}
