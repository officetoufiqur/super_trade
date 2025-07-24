<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::insert(
            [
                [
                    'language' => 'english',
                    'title_eng' => 'UNLOCK SUPERTRADE CASHFLOW AND COMMERCE OPPORTUNITIES THROUGH AI DRIVEN BARTER',
                    'sub_title_eng' => 'Supertrade helps your business increase Sales while conserving Cash. Be a Global Entrepreneur',
                    'btn_text1_eng' => 'Contact Now',
                    'btn_text2_eng' => 'Join Now',
                    'video_eng' => 'https://www.youtube.com/embed/your-video-id',
                    'title_fr' => null,
                    'sub_title_fr' => null,
                    'btn_text1_fr' => null,
                    'btn_text2_fr' => null,
                    'video_fr' => null,
                ],
                [
                    'language' => 'french',
                    'title_eng' => null,
                    'sub_title_eng' => null,
                    'btn_text1_eng' => null,
                    'btn_text2_eng' => null,
                    'video_eng' => null,
                    'title_fr' => "DÉBLOQUEZ LES OPPORTUNITÉS DE FLUX DE TRÉSORERIE ET DE COMMERCE SUPERTRADE GRÂCE AU TROC ALIMENTÉ PAR L'IA",
                    'sub_title_fr' => 'Supertrade aide votre entreprise à augmenter les ventes tout en conservant les liquidités. Soyez un Entrepreneur Global',
                    'btn_text1_fr' => 'Prendre Contact',
                    'btn_text2_fr' => 'Rejoignez Maintenant',
                    'video_fr' => 'https://www.youtube.com/embed/your-video-id',
                ],
            ]
        );
    }
}
