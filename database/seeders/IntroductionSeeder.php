<?php

namespace Database\Seeders;

use App\Models\Introduction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Introduction::insert([
//             [
//                 'aboutus' => '<h1><strong>আমাদের সম্পর্কে</strong></h1>

// <p>&nbsp;</p>

// <p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন গ্রাম বাংলার অনগ্রসর জনগোষ্ঠীর জীবন মান উন্নয়নে নিবেদিত। আমাদের লক্ষ্য ও উদ্দেশ্য হল বাংলাদেশের গ্রামীন জনসাধারণের বিভিন্ন সমস্যা উত্তরণে সাহায্য করা। অনগ্রসর জনগোষ্ঠীর মধ্যে আমরা গ্রামীণ অসহায় নারী ও শিশুদের জন্য বিশেষ ভাবে মনোযোগী। আমরা জানি একজন নারী তার পরিবারে, সমাজে এবং রাষ্ট্রে তার নিজের অধিকার আদায়ে বিভিন্ন ভাবে পিছিয়ে আছে এবং পদে পদে বঞ্চণার শিকার হচ্ছে। তার অসহায়ত্বের সুযোগ নিয়ে তার উপরে চলছে নিযাতন নিপীড়ন। ফলে পরিবারে শিশূরাও অনিরাপদ ও অসহায় হয়ে পরেছে যা পুরো দেশের জন্য ক্ষতিকর। এজন্য নারীর আর্থিক ক্ষমতায়নকে আমরা বিশেষভাবে উৎসাহিত করি এবং নারীকে আত্মনির্ভরশীল করে গড়ে তোলার বিষয়ে প্রত্যয়ী।</p>
// ',
//                 'memory' => '<h1><strong>ফাউন্ডেশনের পটভূমি</strong></h1>

// <p>&nbsp;</p>

// <p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনের পিছনে রয়েছেন সেরকম দুজন আত্মপ্রত্যয়ী মানুষ। যারা জীবন যুদ্ধে হয়েছেন জয়ী । অন্যদের জীবনকে আলোকিত করার জন্য দিয়েছেন তাদের সর্বস্ব। তারা হলেন জনাব মু: মুসলিম আলী আখন্দ ও শামসুন নাহার বেগম । মুহাম্মদ মুসলিম আলী আখন্দ (সাহিত্যবিনোদ) ও শামসুন নাহার বেগম (রত্নগর্ভা পুরস্কারপ্রাপ্ত মা) এর স্মরণে এই ফাউন্ডেশন প্রতিষ্ঠিত হয়েছে।</p>
// ',

//                 'backdrop' => '<p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনে আপনাকে স্বাগতম। এ ফাউন্ডেশনটি একটি মানবকল্যানমুখী প্রতিষ্ঠান। এ প্রতিষ্ঠানটি সমাজের অনগ্রসর, সুবিধাবঞ্চিত, কমসুবিধাপ্রাপ্ত মানুষের সুন্দরভাবে বেঁচে থাকার স্বপ্ন রচনা করে। স্বপ্ন রচনা ও স্বপ্ন বাস্তবায়ন একটি কঠিন পথ পরিক্রমা। যে পথে রয়েছে অনেক বাঁধাবিঘ্ন , অনেক চ্যালেঞ্জ। এ সকল চ্যালেঞ্জ মোকাবেলায় যেমন দরকার সাহস তেমনি দরকার আত্মবিশ্বাস ও দৃঢ় মনোবল। সুবিধাবঞ্চিত মানুষের মধ্যে সবগুলো বৈশিষ্ট্যের প্রকৃত অভাব রয়েছে। রয়েছে হেরে যাবার ভয়ভীতি। প্রতিষ্ঠানটি সেই ভেঙ্গে পরা , পিছিয়ে পরা মানুষের বন্ধু হয়ে কাজ করে। ফাউন্ডেশনটি বিশ্বাস করে সমাজের এসব অনগ্রসর মানুষকে সাপোর্ট দিলে, তার মধ্যে আত্মমর্যাদাবোধ জাগ্রত হলে সে এগিয়ে যায়। এগিয়ে যায় দেশ ও সমাজ।</p>

// <p>আমরা আপনাকে জানাতে চাই সেই সব মানুষের বেঁচে থাকার গল্পগুলি। তাদের জীবন সংগ্রামের কাহিনীগুলো। আপনিও এতে আগ্রহী হয়ে উঠবেন আপনার পথের বাঁধাবিঘ্নগুলি উত্তীর্ণ হতে। পথ পেয়ে যাবেন আত্মমর্যাদাশীল জীবন যাপনের। যে জীবন কাজের, যে জীবন আনন্দের । যে জীবন উপার্জনের। নয় কোন ভিক্ষাবৃত্তি বা অপমানের।</p>

// <p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনের পিছনে রয়েছেন সেরকম দুজন আত্মপ্রত্যয়ী মানুষ। যারা জীবন যুদ্ধে হয়েছেন জয়ী । অন্যদের জীবনকে আলোকিত করার জন্য দিয়েছেন তাদের সর্বস্ব। তারা হলেন&nbsp;<strong>জনাব মু: মুসলিম আলী আখন্দ ও শামসুন নাহার বেগম </strong>।&nbsp;তাদের নিয়ে আমাদের আলোচনা থাকবে । থাকবে তাদের জীবন কাহিনী।</p>
// ',
//             ]
[
    'aboutus' => '<h1><strong>আমাদের সম্পর্কে</strong></h1>
    <p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন গ্রাম বাংলার অনগ্রসর জনগোষ্ঠীর জীবন মান উন্নয়নে নিবেদিত। আমাদের লক্ষ্য ও উদ্দেশ্য হল বাংলাদেশের গ্রামীন জনসাধারণের বিভিন্ন সমস্যা উত্তরণে সাহায্য করা। অনগ্রসর জনগোষ্ঠীর মধ্যে আমরা গ্রামীণ অসহায় নারী ও শিশুদের জন্য বিশেষ ভাবে মনোযোগী। আমরা জানি একজন নারী তার পরিবারে, সমাজে এবং রাষ্ট্রে তার নিজের অধিকার আদায়ে বিভিন্ন ভাবে পিছিয়ে আছে এবং পদে পদে বঞ্চণার শিকার হচ্ছে। তার অসহায়ত্বের সুযোগ নিয়ে তার উপরে চলছে নিযাতন নিপীড়ন। ফলে পরিবারে শিশুরাও অনিরাপদ ও অসহায় হয়ে পড়েছে যা পুরো দেশের জন্য ক্ষতিকর। এজন্য নারীর আর্থিক ক্ষমতায়নকে আমরা বিশেষভাবে উৎসাহিত করি এবং নারীকে আত্মনির্ভরশীল করে গড়ে তোলার বিষয়ে প্রত্যয়ী।</p>',

    'aboutus_en' => '<h1><strong>About Us</strong></h1>
    <p>The Muslim Ali Shamsun Nahar Memorial Foundation is dedicated to improving the lives of the underprivileged rural population. Our goal and objective are to assist the rural people of Bangladesh in overcoming various challenges. Among the underprivileged population, we pay special attention to helpless rural women and children. We recognize that women, in particular, face many obstacles in claiming their rights within the family, society, and the state. They often fall victim to various forms of oppression and discrimination. Their vulnerability leads to ongoing abuse and exploitation, leaving children in unsafe and helpless situations, which negatively impacts the entire nation. This is why we place significant emphasis on women’s economic empowerment and are committed to making them self-reliant.</p>',

    'memory' => '<h1><strong>ফাউন্ডেশনের পটভূমি</strong></h1>
    <p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনের পিছনে রয়েছেন সেরকম দুজন আত্মপ্রত্যয়ী মানুষ। যারা জীবন যুদ্ধে হয়েছেন জয়ী । অন্যদের জীবনকে আলোকিত করার জন্য দিয়েছেন তাদের সর্বস্ব। তারা হলেন জনাব মু: মুসলিম আলী আখন্দ ও শামসুন নাহার বেগম । মুহাম্মদ মুসলিম আলী আখন্দ (সাহিত্যবিনোদ) ও শামসুন নাহার বেগম (রত্নগর্ভা পুরস্কারপ্রাপ্ত মা) এর স্মরণে এই ফাউন্ডেশন প্রতিষ্ঠিত হয়েছে।</p>',

    'memory_en' => '<h1><strong>Foundation Background</strong></h1>
    <p>Behind the Muslim Ali Shamsun Nahar Memorial Foundation are two determined individuals who have triumphed in life’s struggles. They have dedicated everything to enlightening the lives of others. They are Mr. Md. Muslim Ali Akhand and Mrs. Shamsun Nahar Begum. This foundation was established in memory of Muhammad Muslim Ali Akhand (Sahityabinod) and Shamsun Nahar Begum (recipient of the Ratnagarbha Award).</p>',

    'backdrop' => '<p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনে আপনাকে স্বাগতম। এ ফাউন্ডেশনটি একটি মানবকল্যানমুখী প্রতিষ্ঠান। এ প্রতিষ্ঠানটি সমাজের অনগ্রসর, সুবিধাবঞ্চিত, কমসুবিধাপ্রাপ্ত মানুষের সুন্দরভাবে বেঁচে থাকার স্বপ্ন রচনা করে। স্বপ্ন রচনা ও স্বপ্ন বাস্তবায়ন একটি কঠিন পথ পরিক্রমা। যে পথে রয়েছে অনেক বাঁধাবিঘ্ন , অনেক চ্যালেঞ্জ। এ সকল চ্যালেঞ্জ মোকাবেলায় যেমন দরকার সাহস তেমনি দরকার আত্মবিশ্বাস ও দৃঢ় মনোবল। সুবিধাবঞ্চিত মানুষের মধ্যে সবগুলো বৈশিষ্ট্যের প্রকৃত অভাব রয়েছে। রয়েছে হেরে যাবার ভয়ভীতি। প্রতিষ্ঠানটি সেই ভেঙ্গে পরা , পিছিয়ে পরা মানুষের বন্ধু হয়ে কাজ করে। ফাউন্ডেশনটি বিশ্বাস করে সমাজের এসব অনগ্রসর মানুষকে সাপোর্ট দিলে, তার মধ্যে আত্মমর্যাদাবোধ জাগ্রত হলে সে এগিয়ে যায়। এগিয়ে যায় দেশ ও সমাজ।</p>
    <p>আমরা আপনাকে জানাতে চাই সেই সব মানুষের বেঁচে থাকার গল্পগুলি। তাদের জীবন সংগ্রামের কাহিনীগুলো। আপনিও এতে আগ্রহী হয়ে উঠবেন আপনার পথের বাঁধাবিঘ্নগুলি উত্তীর্ণ হতে। পথ পেয়ে যাবেন আত্মমর্যাদাশীল জীবন যাপনের। যে জীবন কাজের, যে জীবন আনন্দের । যে জীবন উপার্জনের। নয় কোন ভিক্ষাবৃত্তি বা অপমানের।</p>
    <p>মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশনের পিছনে রয়েছেন সেরকম দুজন আত্মপ্রত্যয়ী মানুষ। যারা জীবন যুদ্ধে হয়েছেন জয়ী । অন্যদের জীবনকে আলোকিত করার জন্য দিয়েছেন তাদের সর্বস্ব। তারা হলেন&nbsp;<strong>জনাব মু: মুসলিম আলী আখন্দ ও শামসুন নাহার বেগম </strong>।&nbsp;তাদের নিয়ে আমাদের আলোচনা থাকবে । থাকবে তাদের জীবন কাহিনী।</p>',

    'backdrop_en' => '<p>Welcome to the Muslim Ali Shamsun Nahar Memorial Foundation. This foundation is a humanitarian organization. It envisions a better life for the disadvantaged, underprivileged, and marginalized people of society. The journey of dreaming and realizing dreams is a difficult one, filled with obstacles and challenges. Overcoming these challenges requires courage, self-confidence, and strong determination. Unfortunately, these essential traits are often lacking among the underprivileged, who live in constant fear of failure. This foundation works as a friend to those who have fallen behind and lost hope. We believe that by providing support to these marginalized people and instilling a sense of self-worth, they can move forward, benefiting both society and the nation.</p>
    <p>We want to share with you the stories of these people’s struggles and survival. Their journeys of overcoming hardships will inspire you to face and overcome your own challenges. Through their experiences, you will find the path to a dignified and fulfilling life, one of work, joy, and self-sufficiency—free from dependency or humiliation.</p>
    <p>Behind the Muslim Ali Shamsun Nahar Memorial Foundation are two determined individuals who have triumphed in life’s struggles. They have dedicated everything to enlightening the lives of others. They are <strong>Mr. Md. Muslim Ali Akhand and Mrs. Shamsun Nahar Begum</strong>. Our discussions will revolve around their lives and contributions.</p>',
]
        ]);
    }
}
