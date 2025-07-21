<?php

namespace Database\Seeders;

use App\Models\Navbar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Navbar::insert(
            $menus = [
                [
                    'language' => 'english',
                    'title_eng' => 'Home',
                    'title_fr' => null,
                    'url' => '/',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'About',
                    'title_fr' => null,
                    'url' => '/about',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Services',
                    'title_fr' => null,
                    'url' => '/services',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Contact',
                    'title_fr' => null,
                    'url' => '/contact',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Join Now',
                    'title_fr' => null,
                    'url' => '/join-now',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Your Benefits',
                    'title_fr' => null,
                    'url' => '/membership-benefits',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => "FAQ's",
                    'title_fr' => null,
                    'url' => '/faq',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'What is Barter',
                    'title_fr' => null,
                    'url' => '/barter',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'How it Works',
                    'title_fr' => null,
                    'url' => '/supertrade-process',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Advantages',
                    'title_fr' => null,
                    'url' => '/supertrade-advantage',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Barter Exchange',
                    'title_fr' => null,
                    'url' => '/barter-exchange',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'How you market your Business',
                    'title_fr' => null,
                    'url' => '/marketing-option',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'What you can barter for',
                    'title_fr' => null,
                    'url' => '/what-you-can-barter-for',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Your Benefits',
                    'title_fr' => null,
                    'url' => '/press-releases',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Press',
                    'title_fr' => null,
                    'url' => '/press-releases',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'english',
                    'title_eng' => 'Referrals',
                    'title_fr' => null,
                    'url' => '/referrals',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Accueil',
                    'url' => '/',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'À propos',
                    'url' => '/about',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Services',
                    'url' => '/services',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Contact',
                    'url' => '/contact',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Rejoignez-nous',
                    'url' => '/join-now',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Vos avantages',
                    'url' => '/membership-benefits',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'FAQ',
                    'url' => '/faq',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Qu’est-ce que le troc ?',
                    'url' => '/barter',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Comment ça marche',
                    'url' => '/supertrade-process',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Avantages',
                    'url' => '/supertrade-advantage',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Échange de troc',
                    'url' => '/barter-exchange',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Comment vous commercialisez votre entreprise',
                    'url' => '/marketing-option',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Ce que vous pouvez échanger',
                    'url' => '/what-you-can-barter-for',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Vos avantages',
                    'url' => '/press-releases',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Presse',
                    'url' => '/press-releases',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'language' => 'france',
                    'title_eng' => null,
                    'title_fr' => 'Parrainages',
                    'url' => '/referrals',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
        );
    }
}
