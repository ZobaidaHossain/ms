<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::insert([
            [

                'title' => 'আমাদের সম্পর্কে',
                'sub_title' => 'মুসলিম আলী শামসুন নাহার ফাউন্ডেশন',
                'description' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন গ্রাম বাংলার অনগ্রসর জনগোষ্ঠীর জীবন মান উন্নয়নে নিবেদিত। আমাদের লক্ষ্য ও উদ্দেশ্য হল বাংলাদেশের গ্রামীন জনসাধারণের বিভিন্ন সমস্যা উত্তরণে সাহায্য করা। অনগ্রসর জনগোষ্ঠীর মধ্যে আমরা গ্রামীণ অসহায় নারী ও শিশুদের জন্য বিশেষ ভাবে মনোযোগী। আমরা জানি একজন নারী তার পরিবারে, সমাজে এবং রাষ্ট্রে তার নিজের অধিকার আদায়ে বিভিন্ন ভাবে পিছিয়ে আছে এবং পদে পদে বঞ্চণার শিকার হচ্ছে। তার অসহায়ত্বের সুযোগ নিয়ে তার উপরে চলছে নিযাতন নিপীড়ন। ফলে পরিবারে শিশূরাও অনিরাপদ ও অসহায় হয়ে পরেছে যা পুরো দেশের জন্য ক্ষতিকর। এজন্য নারীর আর্থিক ক্ষমতায়নকে আমরা বিশেষভাবে উৎসাহিত করি এবং নারীকে আত্মনির্ভরশীল করে গড়ে তোলার বিষয়ে প্রত্যয়ী।',

                'title_en' => 'About us',
                'sub_title_en' => 'Muslim Ali Shamsun Nahar Foundation',
                'description_en' => 'Muslim Ali Shamsun Nahar Memorial Foundation is dedicated to improving the quality of life of the backward communities of rural Bengal. Our aim and objective is to help the rural people of Bangladesh overcome various problems. Among the backward communities, we are especially focused on the helpless rural women and children. We know that a woman is backward in various ways in realizing her own rights in her family, society and the state and is being deprived at every step. Taking advantage of her helplessness, she is being oppressed. As a result, even the infants in the family have become insecure and helpless, which is harmful to the entire country. For this reason, we especially encourage the financial empowerment of women and are convinced of making women self-reliant.',
                'status' => 1,
                'created_at' => now()
            ]
        ]);



    }
}
