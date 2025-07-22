<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::insert([
            [
                'language' => 'english',
                'section_title_eng' => 'Get Started',
                'section_title_fr' => null,
                'label_eng' => 'Sign Up',
                'label_fr' => null,
                'url' => '/join-now',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'english',
                'section_title_eng' => 'Get Started',
                'section_title_fr' => null,
                'label_eng' => 'Login',
                'label_fr' => null,
                'url' => '/login',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'english',
                'section_title_eng' => 'Company',
                'section_title_fr' => null,
                'label_eng' => 'About',
                'label_fr' => null,
                'url' => '/about',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'english',
                'section_title_eng' => 'Legal',
                'section_title_fr' => null,
                'label_eng' => 'Privacy Policy',
                'label_fr' => null,
                'url' => '/privacy-policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'english',
                'section_title_eng' => 'Legal',
                'section_title_fr' => null,
                'label_eng' => 'Terms and Conditions',
                'label_fr' => null,
                'url' => '/terms-condition',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'english',
                'section_title_eng' => 'Help',
                'section_title_fr' => null,
                'label_eng' => 'FAQ',
                'label_fr' => null,
                'url' => '/faq',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'english',
                'section_title_eng' => 'Help',
                'section_title_fr' => null,
                'label_eng' => 'Support',
                'label_fr' => null,
                'url' => '/contact',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'france',
                'section_title_eng' => null,
                'section_title_fr' => 'Commencer',
                'label_eng' => null,
                'label_fr' => "S'inscrire",
                'url' => '/join-now',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'france',
                'section_title_eng' => null,
                'section_title_fr' => 'Commencer',
                'label_eng' => null,
                'label_fr' => 'Se connecter',
                'url' => '/login',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'france',
                'section_title_eng' => null,
                'section_title_fr' => 'Entreprise',
                'label_eng' => null,
                'label_fr' => 'À propos',
                'url' => '/about',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'france',
                'section_title_eng' => null,
                'section_title_fr' => 'Légal',
                'label_eng' => null,
                'label_fr' => 'Politique de confidentialité',
                'url' => '/privacy-policy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'france',
                'section_title_eng' => null,
                'section_title_fr' => 'Légal',
                'label_eng' => null,
                'label_fr' => 'Conditions générales',
                'url' => '/terms-condition',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'france',
                'section_title_eng' => null,
                'section_title_fr' => 'Aide',
                'label_eng' => null,
                'label_fr' => 'FAQ',
                'url' => '/faq',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'france',
                'section_title_eng' => null,
                'section_title_fr' => 'Aide',
                'label_eng' => null,
                'label_fr' => 'Assistance',
                'url' => '/contact',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
