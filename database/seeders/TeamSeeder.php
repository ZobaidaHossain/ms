<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            [
                'serial'=>'০১',
                'name' => 'সৈয়দ আজিজুল হক, পি এইচ ডি',
                'designation' => 'অধ্যাপক, বাংলা বিভাগ, ঢাকা বিশ্ববিদ্যালয়।',
                'image' => 'team/sayed_azizul_haque.jpg',
                'pdf' => 'team/pdf/1732282468.pdf',
                'serial_en' => '01',
                'name_en' => 'Syed Azizul Haque, Ph.D.',
                'designation_en' => 'Professor, Department of Bengali, University of Dhaka.',

                'status' => 1,
                'created_at' => now()
            ],
            [
                'serial'=>'০২',
                'name' => 'মোঃ নাসিরুজ্জামান',
                'designation' => 'সাবেক সচিব ও চেয়ারম্যান, বাংলাদেশ কৃষি ব্যাংক',
                'image' => 'team/Nasiruzzaman.jpeg',
                'pdf'=>'team/pdf/1732282468.pdf',
                'serial_en' => '02',
                'name_en' => 'Md. Nasiruzzaman',
                'designation_en' => 'Former Secretary and Chairman, Bangladesh Agricultural Bank.',


                'status' => 1,
                'created_at' => now()
            ],
            [
                'serial'=>'০৩',
                'name' => 'মো আবদুল মুহিত',
                'designation' => 'এ্যাম্বাসেডর এন্ড পারমানেন্ট রিপ্রেজেন্টিটিভ অব পিপলস রিপাবলিক অফ বাংলাদেশ টু দি ইউনাইটেড নেশনস।',
                'image' => 'team/md_abdul_muhit.png',
                'pdf'=>'team/pdf/1732282468.pdf',
                'serial_en' => '03',
                'name_en' => 'Md. Abdul Muhit',
                'designation_en' => 'Ambassador and Permanent Representative of the People\'s Republic of Bangladesh to the United Nations.',


                'status' => 1,
                'created_at' => now()
            ],
            [
                'serial'=>'০৪',
                'name' => 'মো নিজাম উদ্দিন ,সি আই পি, সি আই পি ডাইরেক্টর,',
                'designation' => 'দ্য ফেডারেশন অব বাংলাদেশ চেম্বার অফ কমার্স এন্ড ইন্ডাস্ট্রি।',
                'image' => 'team/md_nizam_uddin.jpg',
                'pdf'=>'team/pdf/1732282468.pdf',
                'serial_en' => '04',
                'name_en' => 'Md. Nizam Uddin, CIP, CIP Director',
                'designation_en' => 'The Federation of Bangladesh Chambers of Commerce and Industry.',


                'status' => 1,
                'created_at' => now()
            ],
            [
                'serial'=>'০৫',
                'name' => 'উর্মি তামান্না',
                'designation' => 'যুগ্মসচিব, বিদ্যুৎ বিভাগ, বাংলাদেশ সচিবালয়।',
                'image' => 'team/urmi_tammanna.png',
                'pdf'=>'team/pdf/1732282468.pdf',
                'serial_en' => '05',
                'name_en' => 'Urmi Tamanna',
                'designation_en' => 'Joint Secretary, Ministry of Power, Government of Bangladesh.',


                'status' => 1,
                'created_at' => now()
            ],
        ]);
    }
}
