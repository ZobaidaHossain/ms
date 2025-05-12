<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->datas() as $key =>$value){
            Slider::create($value);
        }

    }
    private function datas()
    {
        return [
            [
                'title' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনে আপনাকে স্বাগতম!',
                'title_en'=>'Welcome to the Muslim Ali Shamsun Nahar Memorial Foundation!',
                'image' => 'slider/slider-1.jpg',
                'sub_title' => 'অনগ্রসর গ্রামীণ জনগোষ্ঠীর জীবনমান উন্নয়নে আপনার সহযোগিতার হাত প্রসারিত করুন।',
                'sub_title_en'=>'Extend your hand of cooperation to improve the quality of life of the underprivileged rural population.',
                'link'=>'',

            ],
            [
                'title' => 'শিশু তরুন তরুণীদের আনন্দদায়ক ভুবনে আসুক নিরাপত্তা ও উজ্জ্বল ভবিষ্যতের নিশ্চয়তা।',
                'title_en'=>'May the joyous world of children and young people be filled with security and the assurance of a bright future.',
                'sub_title' => 'সাংস্কৃতিক অংগনে দীপ্তময় তরুণ প্রজন্ম',
                'sub_title_en'=>'The young generation shines in the cultural arena.',
                'image' => 'slider/slider-2.jpg',

                'link'=>'',

            ],
            [
                'title' => 'আমাদের কাজের ভুবন',
                'title_en'=>'Our world of work',
                'sub_title' => 'কাজের মধ্যে আনন্দ, পরিশ্রমে সাফল্য',
                'sub_title_en'=>'Joy in work, success in hard work',
                'image' => 'slider/slider-3.jpg',

                'link'=>'',

            ],
            [
                'title' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন',
                'title_en'=>'Muslim Ali Shamsun Nahar Memorial Foundation',
                'sub_title' => 'অনগ্রসর, সুবিধাবঞ্চিত ও অসহায় মানুষের বন্ধু',
                'sub_title_en'=>'A friend of the backward, disadvantaged and helpless people',
                'image' => 'slider/slider-4.jpg',

                'link'=>'',

            ],
            [
                'title' => 'আমাদের গ্রামের নাম বদরপুর। আমরা আমাদের গ্রামকে ভালোবাসি।',
                'title_en'=>'The name of our village is Badarpur. We love our village.',
                'sub_title' => 'গ্রামের সবাই আমরা আত্মনির্ভরশীল হব।',
                'sub_title_en'=>'All of us in the village will become self-reliant.',
                'image' => 'slider/slider-5.jpg',

                'link'=>'',

            ],
            [
                'title' => 'আমরা করবো জয় একদিন',
                'title_en'=>'We will win one day.',
                'sub_title' => 'প্রশিক্ষণ শেষে আত্মপ্রত্যয়ী উদ্যোক্তাগণ',
                'sub_title_en'=>'Confident entrepreneurs after training.',
                'image' => 'slider/slider-6.jpeg',

                'link'=>'',

            ],
            [
                'title' => 'গ্রামীণ অসহায়, দরিদ্র ও সুবিধাবঞ্চিত মেয়েদের আত্মকর্মসংস্থানে সাপোর্ট করুন। ডোনেট করুন।',
                'title_en'=>'Support rural helpless, poor and underprivileged women in self-employment. Donate Us.',
                'sub_title' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন হিসাব নম্বর- ০২০০০১৪০৪৮৫৬১ অগ্রণী ব্যাংক পিএলসি, শান্তিনগর শাখা, ঢাকা।',
                'sub_title_en'=>'Muslim Ali Shamsun Nahar Memorial Foundation Account Number- 0200014048561 Agrani Bank PLC, Shantinagar Branch, Dhaka.',
                'image' => 'slider/slider-7.jpg',

                'link'=>'',

            ],
        ];
    }
}
