<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notice;
class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notice::insert([
            [
                'serial'=>'০১',
                'title'=>'চাকুরি সংক্রান্ত বিজ্ঞপ্তি',
                'serial_en' => '01',
                'title_en' => 'Job-related Notification',
                'pdf'=>'notice/pdf/1732282468.pdf',
            ],
            [
                'serial'=>'০২',
                'title'=>'চাকুরি সংক্রান্ত বিজ্ঞপ্তি',
                'serial_en' => '02',
    'title_en' => 'Job-related Notification',
                'pdf'=>'notice/pdf/1732282468.pdf',
            ],
            [
                'serial'=>'০৩',
                'title'=>'চাকুরি সংক্রান্ত বিজ্ঞপ্তি',
                'serial_en' => '03',
    'title_en' => 'Job-related Notification',
                'pdf'=>'notice/pdf/1732282468.pdf',
            ],
            [
                'serial'=>'০৪',
                'title'=>'চাকুরি সংক্রান্ত বিজ্ঞপ্তি',
                'serial_en' => '04',
    'title_en' => 'Job-related Notification',
                'pdf'=>'notice/pdf/1732282468.pdf',
            ],
            [
                'serial'=>'০৫',
                'title'=>'চাকুরি সংক্রান্ত বিজ্ঞপ্তি',
                'serial_en' => '05',
    'title_en' => 'Job-related Notification',
                'pdf'=>'notice/pdf/1732282468.pdf',
            ],
            [
                'serial'=>'০৬',
                'title'=>'চাকুরি সংক্রান্ত বিজ্ঞপ্তি',
                'serial_en' => '06',
    'title_en' => 'Job-related Notification',
                'pdf'=>'notice/pdf/1732282468.pdf',
            ],


        ]);
    }
}
