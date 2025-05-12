<?php

namespace Database\Seeders;

use App\Models\Introduction;
use App\Models\Support;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Support::insert([
            [

                'description'=>'<p>আপনার আর্থিক বা সেবামূলক যে কোন সহযোগিতা আমাদেরকে ধৈয্য ও সহনশীলতার সাথে কাজ করার অনুপ্রেরণা যোগাবে। আর যারা আপনার সহযোগিতার কারনে তাদের কষ্টকর ও দু:খময় অন্ধকার জীবন পেরিয়ে আলোর পথে হাঁটার সুযোগ পাচ্ছে তারা আপনাকে কৃতজ্ঞতার সাথে স্মরণ করবে। তাই আসুন অসহায়, দরিদ্র এবং দুখী মানুষের পাশে দাঁড়াই। তাদের মুখে হাসি ফোটাতে আর্থিক সাহায্য কিংবা যেকোন ধরণের দান যেমন, শীতবস্র, খাদ্যসামগ্রী, পুরানো কাপড়, শিক্ষা সহায়ক উপকরণ, ক্রীড়া সামগ্রী, আসবাবপত্র ইত্যাদি নিয়ে এগিয়ে আসি। অত্যন্ত সহজ উপায়ে দ্রব্যসামগ্রী পৌঁছানোর জন্য আমরা আছি আপনার পাশে।</p>

<p>শুধুমাত্র একটি ফোন কল দিয়ে যোগাযোগ করুন।</p>

<p>এই মোবাইল নম্বরে: <strong>০১৭২১১৬৪২৬২</strong><br />
আপনার সহযোগিতার প্রত্যাশায় চেয়ে আছে অসংখ্য অসহায় মানুষ।</p>
',
'description_en' => '<p>Any financial or service-based assistance you provide will inspire us to work with patience and perseverance. Those who, thanks to your support, are able to move from their difficult and sorrowful lives into the path of light will remember you with gratitude. Let’s stand by the helpless, poor, and distressed people. Whether it’s financial aid or donations like winter clothing, food items, old clothes, educational supplies, sports equipment, furniture, etc., we encourage you to come forward. We are here to help you deliver items in the simplest way possible.</p>

<p>Simply make a phone call to get in touch.</p>

<p>This mobile number: <strong>01721164262</strong><br />
Countless helpless people are waiting for your support.</p>',
'image' => 'support/support.jpg',

            ]
        ]);
    }
}
