<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Help;

class HelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Help::insert([
            [
                'foundation_name' => 'মুসলিম আলী শামসুন নাহার মেমোরিয়াল ফাউন্ডেশন',
                'account_number' => '০২০০০১৪০৪৮৫৬১',
                'bank_name' => 'অগ্রণী ব্যাংক লিমিটেড',
                'branch' => 'শান্তিনগর শাখা, ঢাকা',
                'foundation_name_en' => 'Muslim Ali Shamsun Nahar Memorial Foundation',
                'account_number_en' => '0200014048561',
                'bank_name_en' => 'Agrani Bank Limited',
                'branch_en' => 'Shantinagar Branch, Dhaka',

            ],
            [
                'foundation_name' => 'বদরপুর হ্যান্ডিক্রাফ্টস',
                'account_number' => '০২০০০১১৭১৪৬৫৬',
                'bank_name' => 'অগ্রণী ব্যাংক লিমিটেড',
                'branch' => 'বটতলা শাখা , বরিশাল',
                'foundation_name_en' => 'Badarpur Handicrafts',
                'account_number_en' => '0200011714656',
                'bank_name_en' => 'Agrani Bank Limited',
                'branch_en' => 'Battala Branch, Barishal',
            ],
        ]);
    }
}
