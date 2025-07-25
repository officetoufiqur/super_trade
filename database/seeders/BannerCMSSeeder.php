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
            ],
            [
                'language' => 'english',
                'section' => 'join_now',
                'title_eng' => 'JOIN NOW',
                'sub_title_eng' => "Thank you for your interest in Supertrade. We're here to answer any questions you might have.",
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => null,
                'sub_title_fr' => null,
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => null,
            ],
            [
                'language' => 'france',
                'section' => 'join_now',
                'title_eng' => null,
                'sub_title_eng' => null,
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => 'REJOIGNEZ-NOUS',
                'sub_title_fr' => 'Merci de votre intérêt pour Supertrade. Nous sommes là pour répondre à toutes vos questions.',
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => null,
            ],
            [
                'language' => 'english',
                'section' => 'benefit',
                'title_eng' => 'Transform Your Business',
                'sub_title_eng' => "Add Supertrade Barter to your Strategy. Watch your Annual Sales grow and Offset your expenses by using Supertrade credits instead of Cash",
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => null,
                'sub_title_fr' => null,
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => "https://superinternaute.netlify.app/_next/static/media/banner.42b18934.jpg",
            ],
            [
                'language' => 'france',
                'section' => 'benefit',
                'title_eng' => null,
                'sub_title_eng' => null,
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => 'Transformez votre entreprise',
                'sub_title_fr' => "Ajoutez le troc Supertrade à votre stratégie. Voyez vos ventes annuelles augmenter et compensez vos dépenses en utilisant des crédits Supertrade au lieu de l'argent liquide.",
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => "https://superinternaute.netlify.app/_next/static/media/banner.42b18934.jpg",
            ],
            [
                'language' => 'english',
                'section' => 'faq',
                'title_eng' => null,
                'sub_title_eng' => "Frequently Asked Questions",
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => null,
                'sub_title_fr' => null,
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => "https://superinternaute.netlify.app/_next/static/media/banner.9eaf1606.jpg",
            ],
            [
                'language' => 'france',
                'section' => 'faq',
                'title_eng' => null,
                'sub_title_eng' => null,
                'btn_text1_eng' => null,
                'btn_text2_eng' => null,
                'title_fr' => null,
                'sub_title_fr' => "QUESTIONS FRÉQUEMMENT POSÉES (FAQ)",
                'btn_text1_fr' => null,
                'btn_text2_fr' => null,
                'image' => "https://superinternaute.netlify.app/_next/static/media/banner.9eaf1606.jpg",
            ]
        ]);
    }
}
