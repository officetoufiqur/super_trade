<?php

namespace Database\Seeders;

use App\Models\JoinWhyChoose;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JoinWhyChooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JoinWhyChoose::insert([
            [
                'language' => 'english',
                'join_why_chooses_count_eng' => '10K+',
                'join_why_chooses_count_title_eng' => 'Partner Barter Exchange Members',
                'join_why_chooses_image_eng' => 'https://superinternaute.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fjoin1.c0cead5c.jpg&w=3840&q=75',
                'join_why_chooses_title_eng' => 'Why Choose Supertrade?',
                'join_why_chooses_list1_eng' => 'Join a Global Barter Exchange',
                'join_why_chooses_list2_eng' => 'join-now.testimonial.stat.data.1',
                'join_why_chooses_list3_eng' => 'Receive Daily customized Offers',
                'join_why_chooses_list4_eng' => 'Preserve Cash while spending Trade',
                'join_why_chooses_list5_eng' => 'Trade what you have for what you want',
                'join_why_chooses_list6_eng' => 'Customized free App for “On the go” Trading',
                'join_why_chooses_list7_eng' => 'AI driven Trade opportunities',
                'join_why_chooses_list8_eng' => 'Around the corner or around the globe',
                'join_why_chooses_offer_number_eng' => '100’s',
                'join_why_chooses_offer_title_eng' => 'Of Daily Offers',
                'join_why_chooses_count_fr' => null,
                'join_why_chooses_count_title_fr' => null,
                'join_why_chooses_image_fr' => null,
                'join_why_chooses_title_fr' => null,
                'join_why_chooses_list1_fr' => null,
                'join_why_chooses_list2_fr' => null,
                'join_why_chooses_list3_fr' => null,
                'join_why_chooses_list4_fr' => null,
                'join_why_chooses_list5_fr' => null,
                'join_why_chooses_list6_fr' => null,
                'join_why_chooses_list7_fr' => null,
                'join_why_chooses_list8_fr' => null,
                'join_why_chooses_offer_number_fr' => null,
                'join_why_chooses_offer_title_fr' => null,
            ],
            [
                'language' => 'france',
                'join_why_chooses_count_eng' => null,
                'join_why_chooses_count_title_eng' => null,
                'join_why_chooses_image_eng' => null,
                'join_why_chooses_title_eng' => null,
                'join_why_chooses_list1_eng' => null,
                'join_why_chooses_list2_eng' => null,
                'join_why_chooses_list3_eng' => null,
                'join_why_chooses_list4_eng' => null,
                'join_why_chooses_list5_eng' => null,
                'join_why_chooses_list6_eng' => null,
                'join_why_chooses_list7_eng' => null,
                'join_why_chooses_list8_eng' => null,
                'join_why_chooses_offer_number_eng' => null,
                'join_why_chooses_offer_title_eng' => null,
                'join_why_chooses_count_fr' => '10K+',
                'join_why_chooses_count_title_fr' => 'Membres de Partenaires en Échange de Services',
                'join_why_chooses_image_fr' => 'https://superinternaute.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fjoin1.c0cead5c.jpg&w=3840&q=75',
                'join_why_chooses_title_fr' => 'Pourquoi Choisir Supertrade ?',
                'join_why_chooses_list1_fr' => 'Rejoignez un Réseau Mondial de Troc',
                'join_why_chooses_list2_fr' => 'join-now.testimonial.stat.data.1',
                'join_why_chooses_list3_fr' => 'Recevez des Offres Personnalisées Quotidiennes',
                'join_why_chooses_list4_fr' => 'Préservez votre Argent en Utilisant des Crédits',
                'join_why_chooses_list5_fr' => 'Échangez ce que vous avez contre ce dont vous avez besoin',
                'join_why_chooses_list6_fr' => 'Application Gratuite Personnalisée pour le Troc en Mobilité',
                'join_why_chooses_list7_fr' => 'Opportunités de Troc Propulsées par l’IA',
                'join_why_chooses_list8_fr' => 'Près de Chez Vous ou à Travers le Monde',
                'join_why_chooses_offer_number_fr' => '100’s',
                'join_why_chooses_offer_title_fr' => 'D’offres Quotidiennes',
            ]
        ]);
    }
}
