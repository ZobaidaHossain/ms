<?php

namespace Database\Seeders;
use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photo::insert([
        [
        'organization_id'=>'1',
        'image'=>'photo/img-2.jpeg'
        ],
        [
        'organization_id'=>'1',
        'image'=>'photo/img1.jpeg'
        ],

        [
        'organization_id'=>'1',
        'image'=>'photo/img-4.jpeg'
        ],

        [
          'organization_id'=>'1',
         'image'=>'photo/img-3.jpeg'
         ],

         [
         'organization_id'=>'1',
        'image'=>'photo/img-4.jpeg'
         ],
         [
          'organization_id'=>'1',
          'image'=>'photo/img-5.jpeg'
           ],
         [
           'organization_id'=>'2',
           'image'=>'photo/img-7.jpeg'
             ],
        [
         'organization_id'=>'2',
          'image'=>'photo/img-8.jpeg'
          ],
        [
        'organization_id'=>'2',
         'image'=>'photo/img-9.jpeg'
           ],
        
          [
           'organization_id'=>'3',
          'image'=>'photo/img-10.jpg'
          ],       
          [
            'organization_id'=>'3',
           'image'=>'photo/img-13.jpeg'
           ], 
           [
            'organization_id'=>'3',
           'image'=>'photo/img-12.jpg'
           ], 
           [
            'organization_id'=>'3',
           'image'=>'photo/img-11.jpeg'
           ], 
           [
            'organization_id'=>'3',
           'image'=>'photo/img-14.jpeg'
           ], 
           [
            'organization_id'=>'3',
           'image'=>'photo/img-15.jpeg'
           ], 
           [
            'organization_id'=>'4',
           'image'=>'photo/img-16.jpeg'
           ], 
           [
            'organization_id'=>'4',
           'image'=>'photo/img-17.jpeg'
           ], 
           [
            'organization_id'=>'4',
           'image'=>'photo/img-18.jpeg'
           ], 
           [
            'organization_id'=>'4',
           'image'=>'photo/img-20.jpeg'
           ], 
           [
            'organization_id'=>'4',
           'image'=>'photo/img-19.jpeg'
           ], 
           [
            'organization_id'=>'5',
           'image'=>'photo/img-21.jpeg'
           ], 
        ]);
    }
}
