<?php

namespace Database\Seeders;
use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social::insert([
            [

                'title' => 'সমাজসেবা কার্যক্রমে আগ্রহী?',
                'subtitle' => 'আমাদের কার্যক্রম কোন ব্যক্তির বা গোষ্ঠীর কোনো আর্থিক বা সামাজিক স্বার্থ লাভের উদ্দেশ্য নয়। আমাদের সমাজসেবা কার্যক্রমে আপনি আগ্রহী হলে যোগাযোগ করতে পারেন।',
                'title_en'=>'Interested in social service activities?',
                'subtitle_en'=>'Our activities are not intended to gain any financial or social interest of any individual or group. If you are interested in our social service activities, you can contact us.',
                'status' => 1,
                'created_at' => now()
            ]
        ]);



    }
}
