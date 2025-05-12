<?php

namespace Database\Seeders;
use App\Models\Objective;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Objective::insert([
            [
                'serial' => '০১',
                'title' => 'বাংলাদেশের দরিদ্র জনগোষ্ঠীর আত্মকর্মসংস্থানের জন্য প্রয়োজনীয় ও যুগোপযোগী প্রশিক্ষণের ব্যবস্থা করা',
                'serial_en' => '01',
                'title_en' => 'Provide necessary and up-to-date training for self-employment of the underprivileged population of Bangladesh',
            ],
            [
                'serial' => '০২',
                'title' => 'দরিদ্র জনগোষ্ঠির প্রাথমিক স্বাস্থ্য পরিচর্যা ,পারিবারিক পুষ্টি, নিরাপদ মাতৃত্ব ,পরিবার পরিকল্পনা, সংক্রামক রোগ ও এইডস, প্রতিরোধের জন্য টিকাদান কর্মসূচীসহ সকল প্রকার সচেতনতামূলক কাযক্রম গ্রহণ করা। প্রয়োজনে তাদের উন্নত চিকিৎসার জন্য হাসপাতাল /ক্লিনিক স্থাপন করে স্বল্পমূল্যে চিকিৎসার ব্যবস্থা করা।',
                'serial_en' => '02',
                'title_en' => 'Take awareness programs including vaccination programs for primary health care, family nutrition, safe motherhood, family planning, communicable diseases, and AIDS prevention. Establish hospitals/clinics for advanced treatment if necessary at low cost.',
            ],
            [
                'serial' => '০৩',
                'title' => 'আর্সেনিক মুক্ত তথা বিশুদ্ধ পাণীয় জলের ব্যবস্থা এবং পয়:নিস্কাশন,স্যানিটেশন কাযক্রম গ্রহণ ও বাস্তবায়নমূলক বিভিন্ন কর্মসূচী গ্রহণ করা।',
                'serial_en' => '03',
                'title_en' => 'Ensure arsenic-free and safe drinking water, and implement wastewater management and sanitation programs.',
            ],
            [
                'serial' => '০৪',
                'title' => 'পরিবেশ সংরক্ষণ ,বনায়ন,ও নার্সারী বিষয়ক কর্মসূচী গ্রহণ করা।',
                'serial_en' => '04',
                'title_en' => 'Take initiatives for environmental conservation, afforestation, and nursery programs.',
            ],
            [
                'serial' => '০৫',
                'title' => 'নিরক্ষরতা দূরীকরণের জন্য সরকারের উন্নয়ণশীল প্রচেষ্টার পাশাপাশি শিশু ও বয়স্ক শিক্ষা ও উপ আনুষ্ঠানিক/আনুষ্ঠানিক শিক্ষার ব্যবস্থা করা। প্রয়োজনে যেকোন এলাকার চাহিদা অনুযায়ী স্কুল কলেজ ইত্যাদি নির্মাণ করে উন্নত শিক্ষার ব্যবস্থা করা।',
                'serial_en' => '05',
                'title_en' => 'Alongside government efforts to eliminate illiteracy, provide educational facilities for children and adults, and establish schools and colleges as needed in different areas.',
            ],
            [
                'serial' => '০৬',
                'title' => 'কৃষিখাতে বিপ্লব ঘটানোর জন্য কৃষকদের মধ্যে আধুনিক প্রযুক্তি ,উন্নতবীজ ,পরিবেশবান্ধ্বী অন্যান্য আনুষঙ্গিক কৃষি উপকরণ সরবরাহ ও প্রশিক্ষণের মাধ্যমে স্বাবলম্বী করে গড়ে তোলা।',
                'serial_en' => '06',
                'title_en' => 'Introduce modern technology, quality seeds, and eco-friendly agricultural tools to farmers and provide training for self-sufficiency in agriculture.',
            ],
            [
                'serial' => '০৭',
                'title' => 'ধুমপান ও মাদকবিরোধী কাযক্রম গ্রহণ করা এবং মাদকাশক্তদের সুস্থ করার জন্য বিভিন্ন কর্মসূচী গ্রহণ করা;',
                'serial_en' => '07',
                'title_en' => 'Implement anti-smoking and anti-drug programs, and create initiatives to rehabilitate drug addicts.',
            ],
            [
                'serial' => '০৮',
                'title' => 'দু:স্থ, অসহায়, বিধবা, স্বামী পরিত্যক্তা,গৃহিনী, কিশোর কিশোরী বেকার যুবক যুবতী এতিম শিশু কিশোর অক্ষম শারীরিক ও মানসিক প্রতিবন্ধীদের কল্যানে কারিগরী প্রশিক্ষণ ও উন্নয়ন মূলক বিভিন্ন পদক্ষেপ গ্রহণ করা;',
                'serial_en' => '08',
                'title_en' => 'Take various initiatives for the welfare of the poor, helpless, widows, abandoned women, housewives, unemployed youth, orphaned children, and people with physical and mental disabilities.',
            ],
            [
                'serial' => '০৯',
                'title' => 'কর্মজীবী নারীদের সুবিধার জন্য নারী হোস্টেল শিশু দিবা যত্ন কেন্দ্রও ক্যাটারিং সার্ভিসের ব্যবস্থা করা। বাল্যবিবাহ ,যৌতুক ,ইভটিজিং প্রতিরোধকল্পে ও নারীর ক্ষমতায়ন ও পারিবারিক আইন সম্পর্কে সচেতনতা সৃষ্টি মূলক বিভিন্ন কাযক্রম গ্রহণ করা। নারী নির্যাতন ও শিশু পাচার এবং এসিড সন্ত্রাসের শিকার নারী শিশুদের চিকিৎসাসহ সর্ব প্রকার সহায়তা প্রদান করা;',
                'serial_en' => '09',
                'title_en' => 'Provide facilities such as women\'s hostels, daycare centers for children, and catering services for working women. Implement programs to prevent child marriage, dowry, and eve-teasing, and create awareness on women\'s empowerment and family laws.',
            ],
            [
                'serial' => '১০',
                'title' => 'বাংলাদেশ একটি প্রাকৃতিক দুর্যোগপূর্ণ দেশ। এই দেশে প্রতিনিয়ত অতিবৃষ্টি ,অনাবৃষ্টি, ঝড়-বন্যা ও অগ্নিকান্ড জনিত দুর্ঘটনা ঘটছে। এসব দুর্যোগ মোকাবেলার জন্য অভ্যন্তরীন ও বৈদিশিক সাহায্য ও সহযোগিতার মাধ্যমে দুর্গতদের সাহায্য সহযোগিতা করা এবং দরিদ্র জনগোষ্ঠীর মধ্যে সঞ্চয়ের মনোভাব গড়ে তোলা;',
                'serial_en' => '10',
                'title_en' => 'Bangladesh is a disaster-prone country, experiencing excessive rainfall, drought, storms, floods, and fire-related accidents. Provide aid and assistance to victims of natural disasters and promote a savings mindset among the poor population.',
            ],
            [
                'serial' => '১১',
                'title' => 'আর্থ সামাজিক উন্নয়নের লক্ষ্যে হস্তশিল্প , কুটির শিল্প,হাঁস-মুরগী পালন ডেইরি ফার্ম মৎস চাষ, বায়োগ্যাস ও সৌরবিদ্যূত উৎপাদনমূলক বিভিন্ন প্রকল্প গ্রহণ করা ও বাস্তবায়ন করা;',
                'serial_en' => '11',
                'title_en' => 'Implement various productive projects such as handicrafts, cottage industries, poultry farming, dairy farming, fish farming, biogas, and solar energy production for socio-economic development.',
            ],
            [
                'serial' => '১২',
                'title' => 'অবহেলিত ও নির্যাতিত প্রবীণদের জন্য বৃদ্ধাশ্রম ও চিত্তবিনোদনমূলক বিভিন্ন কাযক্রম গ্রহণ করা;',
                'serial_en' => '12',
                'title_en' => 'Establish old age homes and organize recreational activities for neglected and abused elderly people.',
            ],
            [
                'serial' => '১৩',
                'title' => 'সকল প্রকার উন্নয়নমূলক গবেষণা, প্রশিক্ষণ ,কর্মশালা, সেমিনার ও সিম্পোজিয়াম আয়োজন করা;',
                'serial_en' => '13',
                'title_en' => 'Conduct all types of developmental research, training, workshops, seminars, and symposiums.',
            ],
            [
                'serial' => '১৪',
                'title' => 'নারী-পুরুষ সম্পর্ক উন্নয়ন,মহিলা সমাবেশ, জাতীয় ও আন্তর্জাতিক দিবসসমুহ পালন করা;',
                'serial_en' => '14',
                'title_en' => 'Organize women\'s assemblies, celebrate national and international days, and improve relationships between men and women.',
            ],
            [
                'serial' => '১৫',
                'title' => 'সাম্প্রদায়িক সম্প্রীতি রক্ষা,শান্তি প্রতিষ্ঠা,ও মানবাধিকার প্রতিষ্ঠার জন্য সামাজিক আন্দোলন গড়ে তোলা।',
                'serial_en' => '15',
                'title_en' => 'Establish social movements to promote communal harmony, peace, and human rights.',
            ],
            [
                'serial' => '১৬',
                'title' => 'খেলাধূলার মানোন্নয়নে বিভিন্ন কাযক্রম গ্রহণ করা ।',
                'serial_en' => '16',
                'title_en' => 'Take various initiatives to improve the quality of sports.',
            ],
            [
                'serial' => '১৭',
                'title' => 'ফাউন্ডেশনের স্বার্থে আর্থিক সাহায্য,মঞ্জুরী ,অনুদান, সহযোগিতা , চাঁদা গ্রহণ (বৈদেশিক অনুদান, মঞ্জুরী সাহায্য ও সহযোগিতার ক্ষেত্রে প্রচলিত আইনের বিধান সাপেক্ষে) এবং উক্ত, ,দান, মঞ্জুরী, সাহায্য সহযোগিতা বিভিন্ন তহবিল সংগ্রহ,অর্জন এবং সম্পদ সম্পত্তির রক্ষণাবেক্ষণ।',
                'serial_en' => '17',
                'title_en' => 'Receive financial aid, grants, donations, cooperation, and contributions (in accordance with applicable laws for foreign grants and assistance), and manage and maintain funds and assets for the foundation.',
            ]

                    ]);

    }
}
