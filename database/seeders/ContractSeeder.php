<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contract::insert([
            [

                'link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118017.31706692622!2d90.27175195145168!3d22.427476637905915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aac9bc57910a85%3A0x17b0e59bc5be8439!2z4KaJ4Kak4KeN4Kak4KawLeCmquCmtuCnjeCmmuCmv-CmriDgpqzgpqbgprDgpqrgp4HgprAg4Kas4Ka-4Kef4Kak4KeB4KayIOCmhuCmruCmvuCmqCDgppzgpr7gpq7gp4cg4Kau4Ka44Kac4Ka_4Kam!5e0!3m2!1sen!2sbd!4v1707675240554!5m2!1sen!2sbd',
                'address'=>'আয়েশা স্মৃতিঘর, ১ নং ওয়ার্ড উত্তর বদরপুর, পটুয়াখালী সদর, পটুয়াখালী',
                'address_en'=>'Ayesha Memorial, Ward No. 1, North Badarpur, Patuakhali Sadar, Patuakhali',
                'email' => 'msfoundation2023@gmail.com',
                'number_en' => '01712918368',
                'number_bn' => '০১৭১২৯১৮৩৬৮',
                'status' => 1,
                'created_at' => now()
            ]
        ]);



    }
}
