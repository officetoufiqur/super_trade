<?php

namespace Database\Seeders;

use App\Models\BannerCMS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerCMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerCMS::insert([
            [
                'language' => 'english',
                'section' => 'service',
                'title_eng' => 'Our Services',
                'sub_title_eng' => 'Comprehensive barter trading solutions designed to grow your business and enhance your lifestyle',
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => null,
                'sub_title_fr' => null,
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => 'https://superinternaute.netlify.app/_next/static/media/banner.c860c2b6.jpg',
            ],
            [
                'language' => 'france',
                'section' => 'service',
                'title_eng' => null,
                'sub_title_eng' => null,
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => 'Nos Services',
                'sub_title_fr' => 'Des solutions complètes de troc conçues pour développer votre entreprise et améliorer votre style de vie',
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => null,
            ]
        ]);
    }
}
