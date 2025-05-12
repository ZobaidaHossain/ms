<?php

namespace Database\Seeders;


use App\Models\Heading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Heading::insert([
            [
                'title' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন',
                'subtitle' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন গ্রাম বাংলার অনগ্রসর জনগোষ্ঠীর জীবন মান উন্নয়নে নিবেদিত।',
                'title_en' => 'Muslim Ali Shamsun Nahar Memorial Foundation',
'subtitle_en' => 'The Muslim Ali Shamsun Nahar Memorial Foundation is dedicated to improving the quality of life of the underprivileged communities in rural Bangladesh.'
,

                'link'=>'https://youtu.be/Zk6RtkcANog?si=Mnn94NNw2aLYnxsy',
                'image'=>'heading/handicrafts.jpeg',
                'status' => 1,
                'created_at' => now()
            ]
        ]);
    }
}
