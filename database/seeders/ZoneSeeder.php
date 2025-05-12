<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Zone::insert([
            [
                'description'=>'<p class="">
          <h4>পটুয়াখালী</h4>
          পটুয়াখালী জেলার সদর উপজেলায় ফাউন্ডেশনের কার্যক্রম পরিচালিত হচ্ছে। পটুয়াখালী সদর উপজেলা পটুয়াখালী জেলার
          অন্তর্গত একটি প্রশাসনিক এলাকা এবং পটুয়াখালী জেলার সদর দপ্তর। পটুয়াখালী বাংলাদেশের অন্যতম প্রাচীন শহর ও পৌর
          এলাকা। পটুয়াখালী বাংলাদেশের দক্ষিণাঞ্চলের একটি সম্ভবনাময় জেলা ও দেশের অন্যতম গুরুত্বপূর্ণ নদীবন্দর। ১৯৬৯
          সালে পটুয়াখালী জেলা প্রতিষ্ঠিত হয়।
          পটুয়াখালী এক অপূর্ব নৈসর্গিক সৌন্দর্য্যের লীলাভূমি

          </p>',
                'link'=>'https://www.youtube.com/embed/PVmx3a3ZPys?si=zUsXvhruFDd60GuP?modestbranding=1&showinfo=0&autohide=2&showsearch=0&rel=0&controls=0&fs=0',
                'image'=>'zone/patuakhali.png',
                "image_title"=>"",
                'description_en' => '<p class="">
                <h4>Patuakhali</h4>
                The activities of the foundation are being conducted in Patuakhali Sadar Upazila, which is an administrative area of Patuakhali District. Patuakhali Sadar Upazila is located in the heart of the district and serves as the district headquarters. Patuakhali is one of the oldest cities and municipal areas in Bangladesh. It is a prominent district in southern Bangladesh and one of the country’s most important river ports. The district was established in 1969.
                Patuakhali is a land of exquisite natural beauty.
                </p>',
          'image_title_en' => '',
            ],

            [
                'description'=>' <h4>উন্নয়নের আরেক নাম পটুয়াখালী</h4>
          <p>পটুয়াখালী জেলা এখন উন্নয়নের এক বিশাল কর্মক্ষেত্র। হাজার হাজার কোটি টাকার এক একটি প্রকল্পের কাজ চলমান রয়েছে
            এ
            জেলায়। পায়রা সমুদ্র বন্দর, ইপিজেড, বিদ্যূত, পযটন, কৃষি, মৎস, রেল, সড়ক যোগাযোগসহ বিভিন্ন খাতে সরকারের একাধিক
            মেগা প্রকল্প বাস্তবায়িত হচ্ছে এ জেলায়। এসব কাজের মধ্যে অনেক সমাপ্ত হয়েছে এবং কোন কোন কাজ চলমান রয়েছে।
            কুয়াকাটা
            পর্যটন কেন্দ্র, পায়রা সমুদ্র বন্দর, পায়রা ব্রীজ, পায়রা তাপবিদ্যূত কেন্দ্র, শেখ হাসিনা সেনানিবাস, সাবমেরিন
            ল্যান্ডিং স্টেশন, মহিপুর মৎস অবতন কেন্দ্র এবং ইপিজেড কেন্দ্রের কাজ শেষ হয়েছে। এক কথায়, পটুয়াখালী এখন
            উন্নয়নের
            মহাসড়কে একটি দ্রুতগামী যান। ১৮ কিলোমিটার দৈর্ঘের সৈকতবিশিষ্ট নৈসর্গিক সমুদ্র সৈকত কুয়াকাটা পটুয়াখালী জেলায়
            অবস্থিত। ভ্রমণবিলাসী ও পর্যটকদের আনন্দভ্রমণ ও অবকাশ সময় কাটানোর অন্যতম মনমুগ্ধকর জায়গা হলো সাগরকন্যা
            কুয়াকাটা। শুধু দেশে নয় কুয়াকাটার পরিচিতি এখন বিশ্বজুড়ে। পর্যটন এলাকা হিসাবেও অর্থনৈতিক চাকা সচল রাখার এক
            সম্ভাবনাময় জেলা পটুয়াখালী। </p>',
            "link"=>"",
            "image"=>"",
                'image_title'=>" <p>পটুয়াখালীতে বাস্তবায়নাধীন কুয়াকাটা সহ অন্যান্য মেগা প্রকল্প বাস্তবায়নের চিত্র </p>",
           'description_en' => '<h4>Another Name for Development: Patuakhali</h4>
          <p>Patuakhali is now a huge field of development, with ongoing projects worth billions of dollars in the district. Several mega projects in sectors like Payra Seaport, EPZ, electricity, tourism, agriculture, fisheries, railways, and roads are being implemented. Some projects are completed, and others are still ongoing.
            Key completed projects include the Kuakata Tourism Center, Payra Seaport, Payra Bridge, Payra Thermal Power Plant, Sheikh Hasina Military Base, Submarine Landing Station, Mahipur Fish Landing Center, and the EPZ.
            In short, Patuakhali is speeding ahead on the highway of development. Kuakata, with its 18-kilometer-long scenic beach, is one of the most enchanting places for travel enthusiasts and tourists. Not only in the country, but Kuakata is also gaining global recognition. As a tourist destination, Patuakhali has immense potential for economic growth.</p>',
    'image_title_en' => '<p>Images of ongoing mega projects like Kuakata in Patuakhali.</p>',
],


            [
                "description"=>"",
"link"=>"",
                'image'=>'zone/pyra-pp.jpg',
                'image_title'=>"<p><strong>তাপ বিদ্যুৎ কেন্দ্র:</strong> পটুয়াখালী জেলার কলাপাড়া উপজেলায় ধানখালীতে প্রায় এক হাজার একর জমিতে নির্মাণ করা হয়েছে দেশের সর্ববৃহৎ কয়লাভিত্তিক ১৩২০ মেগাওয়াট তাপবিদ্যুৎ কেন্দ্র।</p>",
           'description_en' => '',
    'image_title_en' => "<p><strong>Thermal Power Plant:</strong> A 1320 MW coal-based thermal power plant, the largest in the country, is being constructed on nearly 1,000 acres of land in the Dhankhali area of Kalapara Upazila, Patuakhali.</p>",
],
            [

                "description"=>"",
"link"=>"",
                'image'=>'zone/pyra-bridge.png',
                'image_title'=>"<p><strong>পায়রা সেতু:</strong> ২০২১ সালের ২৪ সেপ্টেম্বর প্রধানমন্ত্রী ভিডিও কনফারেন্সের মাধ্যমে লেবুখালী পায়রা সেতু উদ্বোধনের পর সেতুটি যানবাহন চলাচলের জন্য খুলে দেওয়া হয়।</p>",
           'description_en' => '',
    'image_title_en' => "<p><strong>Payra Bridge:</strong> On September 24, 2021, after the inauguration of the Leburkhali Payra Bridge by the Prime Minister through a video conference, the bridge was opened for vehicular traffic.</p>",
],
            [
"description"=>"",
"link"=>"",
                'image'=>'zone/pyra-port.png',
                'image_title'=>"<p><strong>পায়রা সমুদ্র বন্দর:</strong> পায়রা সমুদ্র বন্দর: কৃষি ও মৎস্যনির্ভর কলাপাড়া উপজেলা বর্তমানে বাণিজ্যিক উপজেলায় পরিণত হয়েছে। কারণ এই উপজেলায় নির্মাণ করা হচ্ছে দেশের তৃতীয় পায়রা সমুদ্রবন্দর। ২০১৩ সালের ১৯ নভেম্বর প্রধানমন্ত্রী শেখ হাসিনা এই বন্দরের ফলক উন্মোচন করেন। ২০১৬ সালের ১৩ আগস্ট প্রধানমন্ত্রী শেখ হাসিনা ভিডিও কনফারেন্সের মাধ্যমে পায়রা বন্দরের আনুষ্ঠানিক পণ্য খালাস কার্যক্রম উদ্বোধন করেন।</p>",
            'description_en' => '',
    'image_title_en' => "<p><strong>Payra Seaport:</strong> The Payra Seaport, being constructed in the agricultural and fishery-dependent Kalapara Upazila, has transformed into a commercial hub. The Prime Minister unveiled the plaque of this port on November 19, 2013. On August 13, 2016, the Prime Minister launched the official cargo unloading operations of the Payra Seaport via video conference.</p>",
],
            [
                'description'=>'<span class="fw-bold">আমাদের কার্যক্রম এলাকা –পটুয়াখালী সদর: </span> ',
                "link"=>"",
                'image'=>'zone/patuyakhali-sadar.jpg',
                'image_title'=>"   <figcaption> পটুয়াখালী সদর উপজেলার মানচিত্র </figcaption>",
           'description_en' => '<span class="fw-bold">Our Activity Area – Patuakhali Sadar: </span>',
    'image_title_en' => " <figcaption> Map of Patuakhali Sadar Upazila </figcaption>",
],

            [
                'description'=>' <p>
            <span class="fw-bold">
              পটুয়াখালী জেলায় ৮টি উপজেলা রয়েছে।
            </span>

          <ul>
            <li>পটুয়াখালী সদর</li>
            <li>মির্জাগঞ্জ</li>
            <li>বাউফল</li>
            <li>দুমকী</li>
            <li>দশমিনা</li>
            <li>গলাচিপা</li>
            <li>কলাপাড়া</li>
            <li>রাঙাবালি</li>
          </ul>




          </p>',
          "link"=>"",
"image"=>"",
"image_title"=>"",

'description_en' => ' <p>
<span class="fw-bold">
  Patuakhali District has 8 Upazilas:
</span>
<ul>
<li>Patuakhali Sadar</li>
<li>Mirzaganj</li>
<li>Baulfal</li>
<li>Dumki</li>
<li>Dashmina</li>
<li>Galachipa</li>
<li>Kalapara</li>
<li>Rangabali</li>
</ul>
</p>',
'image_title_en' => '',],

        ]);
    }
}
