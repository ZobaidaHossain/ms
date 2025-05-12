<?php

namespace Database\Seeders;

use App\Models\Background;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Background::insert([
            [
                'title' => 'ফাউন্ডেশনের পটভূমি',
                'sub_title' => 'যাদের স্মরণে এই ফাউন্ডেশন',
                'description' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনের পিছনে রয়েছেন সেরকম দুজন আত্মপ্রত্যয়ী মানুষ। যারা জীবন যুদ্ধে হয়েছেন জয়ী । অন্যদের জীবনকে আলোকিত করার জন্য দিয়েছেন তাদের সর্বস্ব। তারা হলেন জনাব মু: মুসলিম আলী আখন্দ ও শামসুন নাহার বেগম । মুহাম্মদ মুসলিম আলী আখন্দ (সাহিত্যবিনোদ) ও শামসুন নাহার বেগম (রত্নগর্ভা পুরস্কারপ্রাপ্ত মা) এর স্মরণে এই ফাউন্ডেশন প্রতিষ্ঠিত হয়েছে।',
                'status' => 1,
                'created_at' => now()
            ]
        ]);
    }
}
