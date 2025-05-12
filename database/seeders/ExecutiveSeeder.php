<?php

namespace Database\Seeders;

use App\Models\Executive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExecutiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Executive::insert([
            [
                'name' => 'মীনা পারভীন',
                'designation' => 'চেয়ারম্যান',
                'name_en' => 'Mina Parveen',
                'designation_en' => 'Chairman',
                'image' => 'executive/chairman_mina.png',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'রীনা পারভীন',
                'designation' => 'ভাইস চেয়ারম্যান',
            'name_en' => 'Rina Parveen',
                'designation_en' => 'Vice Chairman',
                'image' => 'executive/rina_parvin.jpg',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'বেবী পারভীন ',
                'designation' => 'নির্বাহী পরিচালক',
                'name_en' => 'Beby Parveen',
                'designation_en' => 'Executive Director',
                'image' => 'executive/beby_parvin.jpg',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'পলি বেগম',
                'designation' => 'পরিচালক (অর্থ)',
                'name_en' => 'Polly Begum',
                'designation_en' => 'Director (Finance)',
                'image' => 'executive/dir_finance.jpg',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'মো: আমিনুল ইসলাম সিরাজ',
                'designation' => 'পরিচালক',
                'name_en' => 'Mo: Aminul Islam Siraj',
                'designation_en' => 'Director',
                'image' => 'executive/aminul_islam.png',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'আদনান আরেফিন',
                'designation' => 'পরিচালক',
                'name_en' => 'Adnan Arifin',
                'designation_en' => 'Director',
                'image' => 'executive/adnan_arif.jpg',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'মোহাম্মদ পিয়াস',
                'designation' => 'পরিচালক',
                'name_en' => 'Mohammad Piyas',
                'designation_en' => 'Director',
                'image' => 'executive/md_piyas.jpg',
                'status' => 1,
                'created_at' => now()
            ],
        ]);
    }
}
