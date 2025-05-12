<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::insert([
            [
                'title' => 'আত্মবিশ্বাসী ছাত্রীরা',
                'sub_title' => 'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
                'category'=>'প্রশিক্ষণ',

                'image' => 'gallery/portfolio-1.jpg',
                'description'=>'প্রশিক্ষণ শেষে আত্মবিশ্বাসী ছাত্রীরা',
               'title_en'=>'Confident Students',
                'sub_title_en' => 'Confident students after training',
                'category_en'=>'Training',
                'description_en'=>'Confident students after completing the training',

                 'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'জনসচেতনতামূলক র‍্যালি',
                'sub_title' => 'করোনা ভাইরাস জনসচেতনতামূলক র‍্যালি',
                'category'=>'জনসচেতনতামূলক',
                'image' => 'gallery/portfolio-4.jpg',
                'description'=>'করোনা ভাইরাস জনসচেতনতামূলক র‍্যালি',
             'title_en' => 'Awareness Rally',
                'sub_title_en' => 'COVID-19 Awareness Rally',
                'category_en' => 'Public Awareness',
                'description_en' => 'COVID-19 awareness rally for public health',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'হাস্যোজ্জ্বল নারীকর্মী',
                'sub_title' => 'সঠিক প্রশিক্ষণ শেষে হাসি মুখে করি কাজ',
                'category'=>'প্রশিক্ষণ',
                'image' => 'gallery/portfolio-3.jpg',
                'description'=>'সঠিক প্রশিক্ষণ শেষে হাসি মুখে করি কাজ',
               'title_en' => 'Smiling Female Workers',
                'sub_title_en' => 'Smiling workers after the right training',
                'category_en' => 'Training',
                'description_en' => 'Working with a smile after the right training',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'বদরপুর হ্যান্ডিক্রাফ্টস',
                'sub_title' => 'প্রশিক্ষণ শেষে আত্মনির্ভরশীল নারীকর্মী',
                'category'=>'প্রশিক্ষণ',
                'image' => 'gallery/portfolio-2.jpg',
                'description'=>'প্রশিক্ষণ শেষে আত্মনির্ভরশীল নারীকর্মী',
                'title_en' => 'Badarpur Handicrafts',
                'sub_title_en' => 'Self-reliant women workers after training',
                'category_en' => 'Training',
                'description_en' => 'Self-reliant women workers after the training',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'জনসচেতনতামূলক',
                'image' => 'gallery/portfolio-7.jpg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en' => 'COVID Relief Aid',
                'sub_title_en' => 'Providing daily necessities to the underprivileged during COVID',
                'category_en' => '   Public Awareness',
                'description_en' => 'Providing essential goods to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'পাটের ব্যাগে স্ক্রিনপ্রিন্ট',
                'sub_title' => 'ক্রিনপ্রিন্ট করা পাটের ব্যাগ হাতে শিশুরা',
                'category'=>'প্রশিক্ষণ',
                'image' => 'gallery/portfolio-5.jpg',
                'description'=>'ক্রিনপ্রিন্ট করা পাটের ব্যাগ হাতে শিশুরা',
               'title_en'=>'Screen Printing on Jute Bags',
                'sub_title_en' => 'Children holding screen-printed jute bags',
                'category_en'=>'Training',
                'description_en'=>'Children holding jute bags with screen prints',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'সাংস্কৃতিক অনুষ্ঠানে অংশগ্রহণকারী শিশুশিল্পী ',
                'sub_title' => 'সুস্থ ধারা সংস্কৃতি বিকাশে সাংস্কৃতিক অনুষ্ঠান আয়োজন',
                'category'=>'জনসচেতনতামূলক',
                'image' => 'gallery/portfolio-6.jpg',
                'description'=>'সুস্থ ধারা সংস্কৃতি বিকাশে সাংস্কৃতিক অনুষ্ঠান আয়োজন',
                'title_en'=>'Children Artists in Cultural Program',
                'sub_title_en' => 'Cultural event promoting healthy cultural development',
                'category_en'=>'Public Awareness',
                'description_en'=>'Cultural event promoting healthy cultural development',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/portfolio-8.jpg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
               'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/portfolio-9.jpg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-1.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-2.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
               'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-3.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-4.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-5.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
               'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,

                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-6.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,

                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-7.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-8.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-9.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-10.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],

            [
                'title' => 'করোনাকালীন সাহায্য',
                'sub_title' => 'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'category'=>'আর্থিক সহায়তা',
                'image' => 'gallery/image-11.jpeg',
                'description'=>'করোনাকালীন নিম্নবিত্ত মানুষকে নিত্যপণ্য সাহায্য প্রদান',
                'title_en'=>'Financial Aid During the Pandemic',
                'sub_title_en' => 'Providing daily essentials to the underprivileged during the pandemic',
                'category_en'=>'Financial Assistance',
                'description_en'=>'Providing daily essentials to the underprivileged during the pandemic',
                'status' => 1,
                'created_at' => now()
            ],



        ]);
    }
}
