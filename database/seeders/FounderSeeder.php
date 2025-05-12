<?php

namespace Database\Seeders;

use App\Models\Founder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Founder::insert([
            [

                'image' => 'founder/chairman_mina.png',
                'title' => 'ফাউন্ডেশনের প্রতিষ্ঠাতা /চেয়ারম্যানের পরিচিতি:',
                'description' => 'ঢাকা বিশ্ববিদ্যালয় থেকে সমাজকল্যান বিষয়ে এম এস ডিগ্রী লাভ করেছেন। চাকুরীরত অবস্থায় ইংল্যান্ডের চার্টার্ড ইন্সটিটিউট অব পাবলিক ফাইন্যান্স এন্ড একাউন্টিং বিষয়ে ডিপ্লোমা ডিগ্রী অর্জন করেছেন। ১৯৮৮ সালে বিসিএস পরীক্ষার মাধ্যমে সরকারী চাকুরীতে প্রবেশ করে দীর্ঘ ৩৪ বছর বিভিন্ন পদে দায়িত্ব পালন করেছেন। সর্বশেষ মহিলা ও শিশু বিষয়ক মন্ত্রণালয়াধীন জাতীয় মহিলা সংস্থা কর্তৃক বাস্তবায়িত তথ্য আপা প্রকল্পের প্রকল্প পরিচালক পদে দীর্ঘ ৮ (আট) বছর সফলতার সাথে সমস্ত বাংলাদেশের ৪৯২ উপজেলায় প্রতিষ্ঠিত তথ্যকেন্দ্র পরিচালনার মাধ্যমে তৃণমূল নারীদের দোরগোড়ায় তথ্য ও প্রযুক্তির সুবিধা প্রদান করেছেন। তিনি ২০২১ সালে সরকারের অতিরিক্ত সচিব পদ থেকে অবসর গ্রহণ করেছেন। সামাজিক সমস্যা দূরীকরণ, নারী সহিংসতার বিরুদ্ধে সোচ্চার এবং নারী ক্ষমতায়নের লক্ষ্যে কাজ করেছেন। সমাজের তৃণমূল মানুষের বন্ধু মীনা পারভীন সবসময় মানবকল্যানে উদ্বুদ্ধ একজন সাধারন মানুষ।',
                'title_en' => 'Introduction of the Founder/Chairperson:',
'description_en' => 'She obtained an MS degree in Social Welfare from the University of Dhaka. While in service, she earned a diploma in Public Finance and Accounting from the Chartered Institute of Public Finance and Accountancy in England. In 1988, she joined the government service through the BCS examination and served in various positions for 34 years. Most notably, she successfully led the "Tothya Apa" project under the National Women’s Organization of the Ministry of Women and Children Affairs for eight years, managing 492 information centers across Bangladesh to provide technology and information services to grassroots women. She retired in 2021 as an Additional Secretary to the Government. She has actively worked to eliminate social problems, combat violence against women, and promote women’s empowerment. Meena Parveen, a true friend to the underprivileged, is a compassionate individual dedicated to humanitarian work.',

                'status' => 1,
                'created_at' => now()
            ]
        ]);
    }
}
