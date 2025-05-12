<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donation::insert([
            [

                'title'=>'সাপোর্ট করুন',
                'title_en'=>'Support Us',
                'description'=>'"গ্রামীণ অসহায়, দরিদ্র ও সুবিধাবঞ্চিত মেয়েদের আত্মকর্মসংস্থানে সাপোর্ট করুন।"',
                'description_en'=>'"Support rural helpless, poor and underprivileged women in self-employment."',
                'account_number'=>'হিসাব নম্বর- ০২০০০১৪০৪৮৫৬১',
                'account_number_en'=>'Account Number- 0200014048561',
                'branch'=>'অগ্রণী ব্যাংক পিএলসি, শান্তিনগর শাখা, ঢাকা',
                'branch_en'=>'Agrani Bank PLC, Shantinagar Branch, Dhaka',


                'status' => 1,
                'created_at' => now()
            ]
        ]);
    }
}
