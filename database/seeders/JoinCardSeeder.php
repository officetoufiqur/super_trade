<?php

namespace Database\Seeders;

use App\Models\JoinCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JoinCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JoinCard::insert([
            [
                'language' => 'english',
                'section' => 'happens_heading',
                'join_card_heading_eng' => 'What Happens Next?',
                'join_card_sub_heading_eng' => 'Our streamlined process gets you trading quickly',
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'france',
                'section' => 'happens_heading',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => 'Que se Passe-t-il Ensuite ?',
                'join_card_sub_heading_fr' => 'Notre processus simplifié vous permet de commencer à échanger rapidement',
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'english',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-8 h-8 text-[#56a80d]" aria-hidden="true"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>',
                'join_card_title_eng' => 'Super Easy Enrollment',
                'join_card_sub_title_eng' => 'Quick and simple registration process',
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'english',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-[#56a80d]" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>',
                'join_card_title_eng' => 'Expert Support Team',
                'join_card_sub_title_eng' => 'Dedicated team member assigned to your account',
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'english',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8 text-[#56a80d]" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>',
                'join_card_title_eng' => 'Trusted Platform',
                'join_card_sub_title_eng' => 'Secure and reliable barter exchange',
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'english',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-8 h-8 text-[#56a80d]" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                'join_card_title_eng' => 'Immediate Benefits',
                'join_card_sub_title_eng' => 'Start trading and saving cash right away',
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],

            [
                'language' => 'france',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-8 h-8 text-[#56a80d]" aria-hidden="true"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>',
                'join_card_title_fr' => 'Inscription Ultra Simple',
                'join_card_sub_title_fr' => 'Processus d’inscription rapide et facile',
            ],
            [
                'language' => 'france',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-[#56a80d]" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><path d="M16 3.128a4 4 0 0 1 0 7.744"></path><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><circle cx="9" cy="7" r="4"></circle></svg>',
                'join_card_title_fr' => 'Équipe de Support Experte',
                'join_card_sub_title_fr' => 'Un membre dédié est affecté à votre compte',
            ],
            [
                'language' => 'france',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8 text-[#56a80d]" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>',
                'join_card_title_fr' => 'Plateforme Fiable',
                'join_card_sub_title_fr' => 'Échange de services sécurisé et fiable',
            ],
            [
                'language' => 'france',
                'section' => 'happens',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-8 h-8 text-[#56a80d]" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                'join_card_title_fr' => 'Avantages Immédiats',
                'join_card_sub_title_fr' => 'Commencez à échanger et à économiser immédiatement',
            ],

            [
                'language' => 'english',
                'section' => 'questions_heading',
                'join_card_heading_eng' => "Questions? We're Here to Help",
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'france',
                'section' => 'questions_heading',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => 'Des Questions ? Nous Sommes Là pour Vous Aider',
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],

            [
                'language' => 'english',
                'section' => 'questions',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-8 h-8 text-[#56a80d] mb-3" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>',
                'join_card_title_eng' => 'Call Us',
                'join_card_sub_title_eng' => '(646)216-3637',
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'english',
                'section' => 'questions',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-8 h-8 text-[#56a80d] mb-3" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>',
                'join_card_title_eng' => 'Email Us',
                'join_card_sub_title_eng' => 'contact@isupertrade.com',
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'english',
                'section' => 'questions',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-8 h-8 text-[#56a80d] mb-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                'join_card_title_eng' => 'Support Hours USA',
                'join_card_sub_title_eng' => 'Phone 7.30AM to 4PM Chat and Online 24/7',
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => null,
                'join_card_title_fr' => null,
                'join_card_sub_title_fr' => null,
            ],
            [
                'language' => 'france',
                'section' => 'questions',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-8 h-8 text-[#56a80d] mb-3" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>',
                'join_card_title_fr' => 'Appelez-Nous',
                'join_card_sub_title_fr' => '(646)216-3637',
            ],
            [
                'language' => 'france',
                'section' => 'questions',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-8 h-8 text-[#56a80d] mb-3" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>',
                'join_card_title_fr' => 'Envoyez-nous un Email',
                'join_card_sub_title_fr' => 'contact@isupertrade.com',
            ],
            [
                'language' => 'france',
                'section' => 'questions',
                'join_card_heading_eng' => null,
                'join_card_sub_heading_eng' => null,
                'join_card_icon_eng' => null,
                'join_card_title_eng' => null,
                'join_card_sub_title_eng' => null,
                'join_card_heading_fr' => null,
                'join_card_sub_heading_fr' => null,
                'join_card_icon_fr' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-8 h-8 text-[#56a80d] mb-3" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
                'join_card_title_fr' => 'Heures de Support USA',
                'join_card_sub_title_fr' => 'Téléphone de 7h30 à 16h00 Chat et Assistance en Ligne 24/7',
            ],
        ]);
    }
}
