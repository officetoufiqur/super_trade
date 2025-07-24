<?php

namespace Database\Seeders;

use App\Models\JoinNow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JoinNowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JoinNow::insert([
            [
                'language' => 'english',
                'join_heading_eng' => 'See How Supertrade Works',
                'join_sub_heading_eng' => 'Watch our introduction video to understand how barter trading can transform your business',
                'join_title_eng' => 'Discover the Power of Supertrade . JOIN NOW',
                'join_description_eng' => "Watch the intro video. Once you join, you will receive a minimum of a $250 credit line. One of our Barter Experts will walk you step-by-step through everything you need to know to maximize the performance of your account and we will provide you with full access to our Nextrade360 platform to start trading",
                'join_video_eng' => "https://res.cloudinary.com/daav4j7jt/video/upload/v1752229852/join-now-en_tuqwao.mp4",
                'join_list1_eng' => 'How barter trading saves you cash',
                'join_list2_eng' => 'Step-by-step enrollment process',
                'join_list3_eng' => 'Finding the right trading partners',
                'join_list4_eng' => 'Maximizing your trade credits',
                'join_list5_eng' => 'Success stories from our members',
                'join_card_icon1_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-[#56a80d]" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>',
                'join_card_icon2_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield text-[#56a80d]" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>',
                'join_card_icon3_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big text-[#56a80d]" aria-hidden="true"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>',
                'join_card_title1_eng' => 'Community Network',
                'join_card_title2_eng' => 'Secure Trading',
                'join_card_title3_eng' => 'Proven Results',
                'join_card_sub_title1_eng' => 'Connect with thousands of businesses',
                'join_card_sub_title2_eng' => 'Protected transactions and verified members',
                'join_card_sub_title3_eng' => 'Track record of successful barter exchanges',
                'join_heading_fr' => null,
                'join_sub_heading_fr' => null,
                'join_title_fr' => null,
                'join_description_fr' => null,
                'join_video_fr' => null,
                'join_list1_fr' => null,
                'join_list2_fr' => null,
                'join_list3_fr' => null,
                'join_list4_fr' => null,
                'join_list5_fr' => null,
                'join_card_icon1_fr' => null,
                'join_card_icon2_fr' => null,
                'join_card_icon3_fr' => null,
                'join_card_title1_fr' => null,
                'join_card_title2_fr' => null,
                'join_card_title3_fr' => null,
                'join_card_sub_title1_fr' => null,
                'join_card_sub_title2_fr' => null,
                'join_card_sub_title3_fr' => null,
            ],
            [
                'language' => 'france',
                'join_heading_eng' => null,
                'join_sub_heading_eng' => null,
                'join_title_eng' => null,
                'join_description_eng' => null,
                'join_video_eng' => null,
                'join_list1_eng' => null,
                'join_list2_eng' => null,
                'join_list3_eng' => null,
                'join_list4_eng' => null,
                'join_list5_eng' => null,
                'join_card_icon1_eng' => null,
                'join_card_icon2_eng' => null,
                'join_card_icon3_eng' => null,
                'join_card_title1_eng' => null,
                'join_card_title2_eng' => null,
                'join_card_title3_eng' => null,
                'join_card_sub_title1_eng' => null,
                'join_card_sub_title2_eng' => null,
                'join_card_sub_title3_eng' => null,
                'join_heading_fr' => 'Découvrez Comment Fonctionne Supertrade',
                'join_sub_heading_fr' => 'Regardez notre vidéo d’introduction pour comprendre comment le troc peut transformer votre entreprise',
                'join_title_fr' => 'Découvrez la puissance de Supertrade. INSCRIVEZ-VOUS MAINTENANT',
                'join_description_fr' => 'Regardez la vidéo d’introduction. Une fois inscrit, vous recevrez une ligne de crédit minimale de 250 euros. L’un de nos experts en troc vous guidera étape par étape pour maximiser les performances de votre compte, et nous vous fournirons un accès complet à notre plateforme pour commencer à échanger.',
                'join_video_fr' => "https://res.cloudinary.com/daav4j7jt/video/upload/v1752229852/join-now-en_tuqwao.mp4",
                'join_list1_fr' => 'Comment le troc permet d’économiser de l’argent',
                'join_list2_fr' => 'Processus d’inscription étape par étape',
                'join_list3_fr' => 'Trouver les bons partenaires commerciaux',
                'join_list4_fr' => 'Maximiser vos crédits de troc',
                'join_list5_fr' => 'Histoires de réussite de nos membres',
                'join_card_icon1_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-[#56a80d]" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>',
                'join_card_icon2_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield text-[#56a80d]" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>',
                'join_card_icon3_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big text-[#56a80d]" aria-hidden="true"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>',
                'join_card_title1_fr' => 'Réseau Communautaire',
                'join_card_title2_fr' => 'Échanges Sécurisés',
                'join_card_title3_fr' => 'Résultats Prouvés',
                'join_card_sub_title1_fr' => 'Connectez-vous avec des milliers d’entreprises',
                'join_card_sub_title2_fr' => 'Transactions protégées et membres vérifiés',
                'join_card_sub_title3_fr' => 'Historique de succès dans les échanges de services',
            ],
        ]);
    }
}
