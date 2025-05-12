<?php

namespace Database\Seeders;

use App\Models\BgMemory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BgMemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BgMemory::insert([
            [
                'image' => 'bg-memory/muslim_ali.png',
                'title' => 'মুহাম্মদ মুসলিম আলী আখন্দ (সাহিত্যবিনোদ)',
                'title_en' => 'Muhammad Muslim Ali Akhand (Sahityabinod)',
                'description' => '<p>মুহাম্মদ মুসলিম আলী আখন্দ (সাহিত্যবিনোদ) ও শামসুন নাহার বেগম (রত্নগর্ভা পুরস্কারপ্রাপ্ত মা) এর স্মরণে এই ফাউন্ডেশন প্রতিষ্ঠিত হয়েছে। তাই তাদের সম্পর্কে দুচারটি কথা উল্লেখ করা দরকার। মুহাম্মদ মুসলিম আলী আখন্দ একাধারে শিক্ষাগুরু, সমাজসেবক, গবেষক, সাহিত্যিক কবি,গীতিকার ও ছড়াকার হিসাবে তিনি সুখ্যাতি অর্জন করেন।</p>

            <p>তিনি ১৯১৯ সালের ১লা আগষ্ট বর্তমান পটুয়াখালী জেলার বদরপুর গ্রামে এক মধ্যবিত্ত কৃষক পরিবারে জন্মগ্রহণ করেন। তাঁর পিতার নাম আবদুল আলী আখন্দ এবং মাতার নাম আয়েশা খাতুন। ছাত্রাবস্থায় অসাধারন প্রতিভার অধিকারী লেখক ১৯৩০ সালে প্রাইমারি বৃত্তি ও ১৯৩২ সালে মধ্য বাঙ্গালা স্কুল থেকে ছাত্রবৃত্তি অর্জন করেন। এ সময় থেকেই শুরু হয় তাঁর কাব্যচর্চা।</p>',
                'description_en' => '<p>The foundation was established in memory of Muhammad Muslim Ali Akhand (Sahityabinod) and Shamsun Nahar Begum (Ratnagarbha award-winning mother). Therefore, it is necessary to mention a few words about them. Muhammad Muslim Ali Akhand is renowned as a teacher, social worker, researcher, writer, poet, lyricist, and rhymester.</p>

            <p>He was born on August 1, 1919, in the Badrpur village of present-day Patuakhali district, into a middle-class farming family. His father’s name was Abdul Ali Akhand, and his mother’s name was Ayesha Khatun. As a student with exceptional talent, he won a primary scholarship in 1930 and a student scholarship from Madhya Bangla School in 1932. This marked the beginning of his poetic career.</p>',
                'description_more' => '<p>তিনি ঢাকা বিশ্ববিদ্যালয় থেকে ডিপ্লোমা ইন এডুকেশন (ফার্ষ্ট ক্লাশ ফার্ষ্ট -১৯৫১) , এম.এ (এড) (ফার্ষ্ট ক্লাশ ফার্ষ্ট -১৯৫২) ডিগ্রী লাভ করেন। ১৯৪১ সালে তিনি পাদ্রী শিপপুর প্রাইমারী ট্রেনিং সেন্টারে &ldquo;ভার্ণাকুলার টিচার&rdquo; হিসাবে সরকারী চাকুরীতে যোগদান করেন। তিনি পেশাগত মানোন্নয়নে এবং প্রাথমিক শিক্ষার জড়তা কাটিয়ে তুলতে স্বীয় অবদান রাখতে সক্ষম হন। প্রাথমিক শিক্ষায় তিনি সঙ্গীত , চিত্রকলা ও নাটকের ওপর গুরুত্ব আরোপ করেন। ১৯৪৩ সালে লেখক &ldquo;শিক্ষা&rdquo; বিষয়ক প্রবন্ধ লিখে &ldquo;বঙ্গীয় পুরান পরিষদ&rdquo; (শান্তিপুর, নদীয়া) থেকে &ldquo;সাহিত্যবিনোদ&rdquo; উপাধি লাভ করেন ও আয ভারত বিদ্যাতীর্থের সভ্য হন। বিভিন্ন সময়ে পটুয়াখালী সমাচার, জনতা , বরিশাল দর্পন, বাকেরগঞ্জ পরিক্রমা,বাংলার বনে আন্ধার মানিক ও কুমিল্লা থেকে প্রকাশিত আলো পত্রিকায় তার বহু প্রবন্ধ ও কবিতা প্রকাশিত হয়েছে। পটুয়াখালী থেকে প্রকাশিত মাসিক আন্ধার মানিক পত্রিকায় তিনি অন্যতম সম্পাদক ছিলেন। তাছাড়া তিনি পটুয়াখালী থেকে প্রকাশিত দৈনিক &ldquo;পল্লীমেলা ও প্রদর্শনী&rdquo; , একুশে স্মরণিকা- &ldquo;ভুলি নাই&rdquo; সম্পাদনা করেন। লেখক জীবনের বিভিন্ন সময়ে বিভিন্ন সাহিত্য সাংস্কৃতিক ও সমাজকল্যান সংগঠনের সাথে যুক্ত ছিলেন। তার লেখা বই গুলোর মধ্যে অন্যতম হল :</p>

            <ul>
                <li>প্রাইমারী স্বাস্থ্যপাঠ (১৯৩৪)</li>
                <li>বিজ্ঞানের আলো (১৯৫৩)</li>
                <li>শিশু পর্যবেক্ষণ (১৯৫৪)</li>
                <li>জঙ্গে কাশ্মীর ও অন্যান্য কবিতা</li>
                <li>পাঠ পরিকল্পনা (১৯৭৬)</li>
                <li>সাহিত্য সংকলন (১৯৭৬)</li>
                <li>নৈতিক বলে সবল হও-(১৯৭৭)</li>
                <li>তন্ত্রের বিবর্তন (১৯৭৮)</li>
                <li>প্রাথমিক শিক্ষকদের মহাবিক্ষোভ (১৯৮০)</li>
                <li>কবিতার দেশে বেলা শেষে অবশেষে (২০০১)</li>
            </ul>

            <p>দীর্ঘ বছর সরকারী চাকুরী সমাপনান্তে তিনি সালে অবসর গ্রহণ করেন। অবসরকালীন সময়ে তিনি তার গ্রামের বিভিন্ন উন্নয়ন মূলক কাযক্রমে অধিক সম্পৃক্ত হন। কৃষি,শিক্ষা, সংস্কৃতি, রাজনীতি চিন্তা , গবেষণা ইত্যাদি ছিল তার আগ্রহের বিষয়বস্তু। তিনি তার জীবদ্দশায় ইতিহাস, শিল্প সাহিত্য চর্চা, ধর্ম ইত্যাদি বিষয়ে দীর্ঘ সময় পড়াশুনা করে সময় কাটাতেন। তিনি ২০০৪ সালের ৯ ডিসেম্বর ইন্তেকাল করেন। তাকে বদরপুর গ্রামে পারিবারিক কবরস্থানে চিরনিদ্রায় শায়িত করা হয়েছে। গ্রামের নিতান্ত সাধারণ পরিবারের সন্তান হিসাবে তাঁর সমাজ সচেতনতা , শিক্ষার বিস্তারে বিভিন্ন উদ্যোগ , গ্রামের মানুষের প্রতি তার অগাধ ভালোবাসা তাকে বদরপুর গ্রামের মানুষের মধ্যে চির স্মরণীয় করে রেখেছে।</p>',
                'description_more_en' => '<p>He obtained a Diploma in Education (First Class First - 1951) and an M.A. (Ed.) (First Class First - 1952) from Dhaka University. In 1941, he joined the government service as a "Vernacular Teacher" at the Padri Shippur Primary Training Center. He made significant contributions to professional development and breaking the rigidity of primary education. He emphasized music, fine arts, and drama in primary education. In 1943, he wrote an essay on "Education" and received the title "Sahityabinod" from the "Bengali Purana Parishad" (Shantipur, Nadia) and became a member of Azad Bharat Vidyateertha. Over the years, many of his articles and poems were published in various magazines like Patuakhali Samachar, Janata, Barisal Darpan, Bakerganj Parikrama, Banglar Bone Andhar Manik, and Alor Patrika from Comilla. He was also one of the editors of the monthly Andhar Manik published from Patuakhali. Moreover, he edited the daily "Pallimela O Pradarshani" and the Ekushey Smaranika- "Bhuli Nai". During different phases of his life, he was associated with several literary, cultural, and social welfare organizations. Some of his notable works include:</p>

            <ul>
                <li>Primary Health Reading (1934)</li>
                <li>Light of Science (1953)</li>
                <li>Child Observation (1954)</li>
                <li>Poems on Kashmir and Others</li>
                <li>Teaching Plan (1976)</li>
                <li>Literary Compilation (1976)</li>
                <li>Be Strong by Virtue (1977)</li>
                <li>Evolution of Tantra (1978)</li>
                <li>The Great Protest of Primary Teachers (1980)</li>
                <li>In the Land of Poetry, At the End of the Day, Finally (2001)</li>
            </ul>

            <p>After retiring from government service after many years, he became increasingly involved in various developmental activities in his village. Agriculture, education, culture, politics, thinking, and research were his areas of interest. During his lifetime, he spent considerable time studying history, art, literature, and religion. He passed away on December 9, 2004, and was buried in his family graveyard in Badrpur. As a child from an ordinary rural family, his social awareness, various initiatives in spreading education, and deep love for the villagers have made him an unforgettable figure in the hearts of the people of Badrpur.</p>',
                'status' => 1,
                'created_at' => now()
            ]
,
            [
                'title'=>'শামসুন নাহার বেগম পারুল',

                'image' => 'bg-memory/shamsun_nahar.png',
                'description' => '<p>শামসুন নাহার বেগম পারুল ১৯৩৬ সালে বরিশালের চরহোগলা গ্রামে তার নানাবাড়ীতে জন্মগ্রহণ করেন। তাঁর পিতার নাম আবদুল আলী এবং মাতার নাম মাজেদা বেগম। জনাব খোন্দকার আবদুল ছিলেন একজন সরকারী কর্মকর্তা। বরিশাল জেলার অন্তর্গত বুখাইনগর গ্রামে খোন্দকার আবদুল আলীর গ্রামের বাড়ী। শামসুন নাহার বেগমের মাতা বরিশাল জেলার সদর উপজেলাধীন চরহোগলা গ্রামে চৌধুরী বাড়ীর দ্বিতীয় মেয়ে মাজেদা বেগম। শামসুন নাহার বেগম পারুলের দায়িত্বে তিনটি ছোট ভাইবোনকে রেখে হৃদরোগে আক্রান্ত হয়ে মাজেদা বেগম অকাল মৃত্যুবরণ করেন। শামসুন নাহারের বয়স তখন বড়জোর ১০ বছর ১৯৫৪ সালে ১৪ এপ্রিল শামসুন নাহার বেগমের বিয়ে হয় জনাব মু: মুসলিম আলী আখন্দের সাথে। জনাব মু: মুসলিম আলী আখন্দ (সাহিত্য বিনোদ) একজন সরকারী কর্মকর্তা। প্রাইমারী ট্রেনিং ইন্সটিটিউটের সুপারিনটেনডেন্ট পদে চাকুরীরত এ কর্মকর্তা ছিলেন সাহিত্যপ্রেমী ও সংস্কৃতিমনা ব্যক্তি। অত্যন্ত কর্তব্যনিষ্ঠ এবং একজন সৎ শিক্ষক হিসাবে তিনি সুপরিচিত ছিলেন। তাদের দুজনের জীবনে ৪ পুত্র সন্তান ও ৪ কন্যা সন্তানের দ্বারা পরিপূর্ণ হয়।</p>
',
                'description_more'=>'<p>শামসুন নাহার বেগম পারুল একজন রত্নগর্ভা মা হিসাবে পুরস্কৃত হয়েছেন। এর পিছনে রয়েছে একটি বড় জীবন যুদ্ধের হার না মানা কাহিনী । অতি অল্প বয়সে মা কে হারানের শামসুন নাহারের কষ্টকর বাল্যজীবনের পরিসমাপ্তিতে এল বিবাহিত জীবন-অধ্যায়। জীবনের এ অধ্যায়টিও ছিল অনেক কষ্ট ও সংগ্রামে পরিপূর্ণ। স্বামীর শিক্ষকতা পেশায় সংসারে আর্থিক স্বচ্ছলতার বড়ই অভাব ছিল, কিন্তু বড় পরিবারটি চালিতে য়োর ব্যয়ভার ছিল অনেক। মহান মুক্তিযুদ্ধ এই পরিবারটিকে একটি বিপযস্ত অবস্থায় ফেলে দিয়েছিল। এসব কিছু সত্ত্বেও শামসুন নাহার বেগম অত্যন্ত ধীর স্থিরচিত্তে ছেলেমেয়েদের লেখাপড়া চালিয়ে নিয়েছেন। তিনি ছিলেন শিক্ষার প্রতি অতি অনুরাগী একজন মা। মেয়েদের লেখাপড়ায় যে ধরণের প্রতিবন্ধকতার সম্মুখীন তিনি নিজে হয়েছেন সেই একই প্রতিবন্ধকতা রুখে তিনি তার মেয়েদের লেখাপড়ায় সবসময় উৎসাহ দিয়েছেন এবং এ পথে যত সমস্যাই আসুক না কেন তিনি তা সমাধানের পথ খুঁজে বের করার চেষ্টা করেছেন। স্বামীর অবসর জীবনে আর্থিক অস্বচ্ছলতা আরো বৃদ্ধি পায় এবং পরিবারটিকে একসময় শহরে বসবাসের সুযোগ হারাতে হয়। ঐ সময় সন্তানদের লেখাপড়া বন্ধ হয়ে যাওয়ার উপক্রম হলে শামসুন নাহার বেগম একটি চরম অসহায় অবস্থার মধ্যে পরেন। কিন্তু তিনি শান্ত থাকেন এবং শহরে থাকার জন্য বিভিন্ন কষ্টকর বাস্তবতাকে মেনে নিয়ে সরকারি বিশাল বাসভবন ছেড়ে একটি কুড়েঘরে আশ্রয় নিতে দ্বিধাবোধ করেননি। তিনি তার আট রত্নকে সমস্ত ঝড়ঝাপটার আড়ালে রেখে সুশিক্ষায় শিক্ষিত করে তোলেন। দৃঢ় মনোবল ও কষ্টকর বাস্তবতাকে মেনে নিয়ে তিনি তাঁর আট (৮) সন্তানকে যেভাবে বড় করে তুলেছেন তা সত্যিই অতুলনীয় ।</p>

<p>২০০৯ সালে ২৫ ফেব্রুয়ারি তারিখে তিনি তাঁর আটটি রত্ন থেকে একটি রত্নকে চিরতরে হারিয়েছেন। বিপথগামী বিডিআর সেনারা ঢাকার পিলখানায় নির্মম ভাবে হত্যা করে তাঁর অকুতোভয়, দেশপ্রেমী এবং একজন দক্ষ সেনা কর্মকর্তা &ndash;শহীদ লে:কর্নেল শামসুল আজমকে। শেষ জীবনে তিনি তার সন্তান হারানোর বেদনা নিয়ে আরো ৬ (ছয়) বছর অতিবাহিত করেন। এ সময়ে তিনি গ্রামের মানুষের জন্য কিছু করার জন্য সন্তানদের মধ্যে অনুপ্রেরণা ও উৎসাহের আঁধার ছিলেন। কর্মজীবনে সন্তানদের সুনামের সাথে কাজ করার জন্য তিনি সচেতন ভাবে সবাইকে চলার নির্দেশনা দিয়েছেন। তাঁর ধীর স্থির স্বভাবের একজন পরোপকারী নারী হিসাবে সকলের মনে ঠাঁই পেয়েছেন। এই মহীয়সী নারী ২০১৫ সালের ৭ নভেম্বর ইন্তেকাল করেন। তাঁকে তার স্বামী মু: মুসলিম আলী আখন্দের পাশে পারিবারিক কবরস্থানে সমাহিত করা হয়েছে।</p>
',
'title_en'=>'Shamsun Nahar Begum Parul',
'description_en'=>'<p>Shamsun Nahar Begum Parul was born in 1936 in the Charhogla village of Barishal at her maternal grandfather’s house. Her father’s name was Abdul Ali and her mother’s name was Majeda Begum. Mr. Khondkar Abdul was a government officer. Khondkar Abdul Ali’s village house was in the Bukhainagar village of Barishal district. Shamsun Nahar Begum’s mother, Majeda Begum, was the second daughter of the Chowdhury family of Charhogla village in the Barishal district. Shamsun Nahar Begum Parul’s mother, Majeda Begum, passed away at an early age due to heart disease, leaving behind three younger siblings. Shamsun Nahar was only about 10 years old at the time. On April 14, 1954, Shamsun Nahar Begum married Mr. Muslim Ali Akhond. Mr. Muslim Ali Akhond, a literature enthusiast and cultural-minded person, was a government officer serving as the Superintendent of the Primary Training Institute. He was well-known for his integrity and sincerity as a teacher. The couple was blessed with four sons and four daughters.</p>',
'description_more_en'=>'<p>Shamsun Nahar Begum Parul was honored as a priceless mother. Her life is a tale of an unyielding struggle. After losing her mother at a very young age, Shamsun Nahar had a painful childhood, which later transitioned into a married life filled with struggles. Financial hardship was a significant challenge due to her husband’s teaching career, but despite the large family, they managed. The Liberation War left the family in a devastated state. Despite these hardships, Shamsun Nahar Begum continued to support her children’s education with great determination. She was deeply passionate about education. The obstacles she faced in her own education motivated her to always encourage her daughters to pursue their studies, overcoming any barriers. In the later years of her husband’s life, financial difficulties increased, and the family had to leave the city. Faced with the possibility of her children’s education being disrupted, Shamsun Nahar Begum fell into a desperate situation. However, she remained calm, accepting the harsh reality of life and moved to a small house. She worked hard to educate her eight children, ensuring they received a quality education. Her resilience and ability to navigate hardships were unmatched.</p>
<p>On February 25, 2009, she lost one of her precious jewels when her son, Lieutenant Colonel Shamsul Azam, was brutally killed by rogue BDR soldiers in Pilkhana, Dhaka. She lived another six years after his death, enduring the pain of losing her son. During this time, she continued to inspire her children to serve the community. In her final years, she was a beacon of hope for the people of her village, encouraging her children to do good work. She passed away on November 7, 2015, and was buried beside her husband, Mr. Muslim Ali Akhond, in the family cemetery.</p>',
                'status' => 1,
                'created_at' => now()
            ],
            [
                'title'=>'শহীদ লে: কর্ণেল শামসুল আজম, পিএসসি , ইএমই',
                'image' => 'bg-memory/Shamsul-Azam.png',
                'description' => '<p>শহীদ লে: কর্ণেল শামসুল আজম, পিএসসি, ইএমই ৭ ই জানুয়ারী ১৯৬০ সালে পটুয়াখালী সদর উপজেলায় বদরপুর গ্রামে জন্মগ্রহণ করেন। তিনি জনাব মুসলিম আলী আখন্দ ও শামসুন নাহার বেগমের ৪র্থ সন্তান। তিনি বদরপুর গ্রাম উন্নয়নের আলোকবর্তিকা হিসাবে কাজ করেছেন। বদরপুর গ্রামের মানুষের ভাগ্যান্নয়নের ব্রত নিয়ে তিনি তার চাকুরী জীবনের অত্যন্ত ব্যস্ত সময়েও গ্রামবাসীর পাশে দাড়িয়েছেন। তার সাহায্য সহযোগিতা গ্রামের অসহায় দরিদ্র মানুষকে আশার আলো দেখিয়েছে। কর্মসংস্থান , আর্থিক সাহায্য, রাস্তাঘাট উন্নয়ন, জলাশয় নির্মাণ, বিদ্যূত সরবরাহ, ত্রাণ সামগ্রী বিতরণ, বৃক্ষরোপন ইত্যাদি কাজের মাধ্যমে তিনি বদরপুরবাসীর হৃদয়ের মণিকোঠায় তাঁর স্থান করে নিয়েছিলেন। বাংলাদেশ সেনাবাহিনীর এই চৌকষ অফিসার দরিদ্র মানুষের অকৃত্রিম বন্ধু। তাঁর জীবনের সংক্ষিপ্ত বর্ণনায় স্কুল জীবন থেকে শুরু করলে দেখা যায় সর্বক্ষেত্রে তিনি মেধা, দক্ষতা ও মানবিকতার এক প্রকৃষ্ট উদাহরণ।উদাহরণ। প্রাথমিক শিক্ষা শেষে তিনি ১৯৭৫ সালে বরিশাল জিলা স্কুল থেকে বিজ্ঞান শাখায় প্রথম বিভাগে এসএসসি ও ১৯৭৭ সালে বরিশাল ব্রজমোহন কলেজ থেকে প্রথম বিভাগে এইচএসসি পাশ করেন।</p>
',
                'description_more'=>'<p>এরপরেই দেশ মাতৃকার সেবায় নিজেকে নিয়োজিত করার লক্ষ্যে মিলিটারি একাডেমিতে ২য় দীর্ঘমেয়াদী কোর্সে জেন্টেলম্যান ক্যাডেট হিসাবে যোগদান করেন এবং ১৫ জুন ১৯৮০ সালে সেনাবাহিনীতে ইএমই কোরে নিয়মিত কমিশন লাভ করেন। পরবর্তীতে তিনি বাংলাদেশ প্রকৌশল বিশ্ববিদ্যালয় (বুয়েট) থেকে মেকানিক্যাল ইঞ্জিনিয়ারিং এ স্নাতক ডিগ্রী এবং সামরিক বাহিনী কমান্ড এন্ড স্টাফ কলেজ, মিরপুর থেকে কৃতিত্বের সঙ্গে আর্মি স্টাফ কোর্স সম্পন্ন করেন। এছাড়াও তিনি তুরস্ক থেকে কৃতিত্বের সাথে জয়েন্ট স্টাফ কোর্স সম্পন্ন করেন। কর্মজীবনে তিনি বিভিন্ন সময়ে অধিনায়ক , ফিল্ড ওয়ার্কশপ কোম্পানী , ইএমই, প্রধান প্রশিক্ষক, ইএমই সেন্টার, ডাইরেক্টিং স্টাফ, সামরিক বাহিনী কমান্ড এন্ড স্টাফ কলেজ ,পদাতিক ডিভিশনের সিইএমই এবং এএএন্ডকিউএমজি হিসাবে দায়িত্ব পালন করেছেন। প্রকৃতিপ্রেমী, সংস্কৃতিমনা,দৃঢ়চেতা,অকুতোভয় দেশমাতৃকার এই মহান সন্তান ছিলেন স্নেহময় পিতা,অকৃপণ বন্ধুবাৎসল,ভালবাসাময় সত্ত্বার অধিকারী ।বদরপুর গ্রামের মানুষের প্রতি তাঁর ছিল বিশেষ অনুরাগ ও ভালোবাসা। গ্রামবাসীর অর্থনৈতিক অবস্থার উন্নয়নে তিনি বিভিন্ন প্রকল্প চালু করেন এবং পরিচালনায় সক্রিয় অংশগ্রহণ করেন। সর্বশেষ বিডিআর সদর দপ্তরে সিইএমই হিসাবে কর্মরত থাকা অবস্থায় গত ২৫ ফেব্রুয়ারী,২০০৯ তারিখে পিলখানায় বিডিআর বিদ্রোহে বিডিআর-এর বিপথগামী সদস্যের হাতে নিরস্র অবস্থায় শাহাদাত বরণ করেন। বনানী সামরিক কবরস্থানে যথাযোগ্য সামরিক মর্যাদায় তাঁকে সমাহিত করা হয়।</p>
',
'title_en' => 'Martyr Lt. Colonel Shamsul Azam, PSC, EME',

'description_en' => '<p>Martyr Lt. Colonel Shamsul Azam, PSC, EME was born on January 7, 1960, in Badarpur village, Patuakhali Sadar Upazila. He was the fourth child of Mr. Muslim Ali Akhond and Mrs. Shamsun Nahar Begum. He worked as a beacon of development for Badarpur village. With a commitment to improving the lives of the villagers, he stood by them during his busy career. His help and support provided hope to the destitute and needy in the village. Through employment opportunities, financial assistance, road development, pond construction, electricity supply, relief distribution, and tree plantation, he earned a special place in the hearts of the people of Badarpur. A dedicated officer in the Bangladesh Army, he was a true friend to the poor. From his school life, his brilliance, competence, and humanity made him an exemplary figure.</p>',

'description_more_en' => '<p>After his primary education, he joined the Military Academy in 1975 to serve his motherland and became a Gentleman Cadet. He was commissioned in the EME Corps on June 15, 1980. Later, he completed his degree in Mechanical Engineering from Bangladesh University of Engineering and Technology (BUET) and the Army Command and Staff College in Mirpur with distinction. Additionally, he successfully completed the Joint Staff Course in Turkey. Throughout his career, he served as the commander of various units, including Field Workshop Company, EME, Chief Instructor at the EME Center, Directing Staff at the Army Command and Staff College, CEEME of the Infantry Division, and AA&QMG. He was a nature lover, culturally rich, determined, and fearless in his devotion to the nation. He was a loving father, generous friend, and a beloved soul. He had a special affection and love for the people of Badarpur. He launched and actively participated in various projects aimed at improving the economic condition of the villagers. Tragically, while serving as CEEME at the BDR headquarters, he was martyred on February 25, 2009, during the BDR mutiny at Pilkhana. He was buried with full military honors at the Banani Military Cemetery.</p>',
                'status' => 1,
                'created_at' => now()
            ]
        ]);
    }
}
