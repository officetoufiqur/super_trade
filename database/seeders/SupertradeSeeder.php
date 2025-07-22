<?php

namespace Database\Seeders;

use App\Models\Supertrade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupertradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supertrade::insert([
            [
                'language' => 'english',
                'title_eng' => 'As a Supertrade Member, when you need to make a purchase, ask yourself: "Would I rather pay cash, or pay trade?"',
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => null,
                'card_description_eng' => null,
                'card_description_fr' => null,
                'image' => 'https://superinternaute.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhome1.567fa396.jpg&w=640&q=75'
            ],
            [
                'language' => 'english',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => 'INCREASE SALES',
                'card_title_fr' => null,
                'card_description_eng' => 'Business owners across the nation can use barter to bring them new sales, save cash, and attract new customers. Marketing on a whole new level. Learn how today!',
                'card_description_fr' => null,
                'image' => null
            ],
            [
                'language' => 'english',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => 'CONSERVE CASH',
                'card_title_fr' => null,
                'card_description_eng' => "Trade what you have for what you want. It's easy. We simply transfer Supertrade credits to the other account. Now you have credits to spend as well. Why pay cash when you can trade?",
                'card_description_fr' => null,
                'image' => null
            ],
            [
                'language' => 'english',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => 'BUILD CUSTOMER LOYALTY',
                'card_title_fr' => null,
                'card_description_eng' => "Loyal customers will come back, and those customers will bring others. They purchase repeatedly, use what they purchase, interact with you though a variety of different channels",
                'card_description_fr' => null,
                'image' => null
            ],
            [
                'language' => 'english',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => 'TAP INTO NEW MARKETS',
                'card_title_fr' => null,
                'card_description_eng' => "Level the competition, grow one's customer base, and satisfying existing customer's growing needs. Here are some examples of why businesses expand into new markets: 1) to level with the competition, 2) to grow the customer base 3) to satisfying existing customer's growing needs.",
                'card_description_fr' => null,
                'image' => null
            ],
            [
                'language' => 'english',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => 'ENHANCE YOUR LIFESTYLE',
                'card_title_fr' => null,
                'card_description_eng' => "You might be surprised at things you can get though the barter system. Members many opportunities to buy and sell.",
                'card_description_fr' => null,
                'image' => null
            ],
            [
                'language' => 'english',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => 'JOIN A GLOBAL BUSINESS COMMUNITY',
                'card_title_fr' => null,
                'card_description_eng' => "Anyone can trade as long they have something to trade. Examples: Airfare, Resorts, dental services, restaurants, shows etc.",
                'card_description_fr' => null,
                'image' => null
            ],
            [
                'language' => 'english',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => 'MOVE EXCESS INVENTORY',
                'card_title_fr' => null,
                'card_description_eng' => "Many companies carry excess inventory -EX. Empty rooms or tables, dresses not selling for cash, buyouts. We can help you with that by advertising it via Supertrade.",
                'card_description_fr' => null,
                'image' => null
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => 'En tant que membre Supertrade, lorsque vous devez faire un achat, demandez-vous : "Préférerais-je payer en espèces ou payer par échange ?"',
                'card_title_eng' => null,
                'card_title_fr' => null,
                'card_description_eng' => null,
                'card_description_fr' => null,
                'image' => 'https://superinternaute.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhome1.567fa396.jpg&w=640&q=75'
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => 'AUGMENTER LES VENTES',
                'card_description_eng' => null,
                'card_description_fr' => "Les propriétaires d'entreprise à travers la nation peuvent utiliser le troc pour leur apporter de nouvelles ventes, économiser de l'argent et attirer de nouveaux clients. Marketing à un tout nouveau niveau. Apprenez comment aujourd'hui !",
                'image' => null
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => 'CONSERVER LES LIQUIDITÉS',
                'card_description_eng' => null,
                'card_description_fr' => "Échangez ce que vous avez contre ce que vous voulez. C'est facile. Nous transférons simplement les crédits Supertrade vers l'autre compte. Maintenant vous avez aussi des crédits à dépenser. Pourquoi payer en espèces quand vous pouvez échanger ?",
                'image' => null
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => 'CONSTRUIRE LA FIDÉLITÉ CLIENT',
                'card_description_eng' => null,
                'card_description_fr' => "Les clients fidèles reviendront, et ces clients en amèneront d'autres. Ils achètent de manière répétée, utilisent ce qu'ils achètent, interagissent avec vous à travers une variété de canaux différents",
                'image' => null
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => 'ACCÉDER À DE NOUVEAUX MARCHÉS',
                'card_description_eng' => null,
                'card_description_fr' => "Égaliser la concurrence, développer sa base de clients et satisfaire les besoins croissants des clients existants. Voici quelques exemples de pourquoi les entreprises s'étendent vers de nouveaux marchés : 1) pour égaliser avec la concurrence, 2) pour développer la base de clients 3) pour satisfaire les besoins croissants des clients existants.",
                'image' => null
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => 'AMÉLIORER VOTRE STYLE DE VIE',
                'card_description_eng' => null,
                'card_description_fr' => "Vous pourriez être surpris des choses que vous pouvez obtenir grâce au système de troc. Les membres ont de nombreuses opportunités d'acheter et de vendre.",
                'image' => null
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => "REJOINDRE UNE COMMUNAUTÉ D'AFFAIRES MONDIALE",
                'card_description_eng' => null,
                'card_description_fr' => "N'importe qui peut échanger tant qu'il a quelque chose à échanger. Exemples : Billets d'avion, Resorts, services dentaires, restaurants, spectacles, etc.",
                'image' => null
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => null,
                'card_title_eng' => null,
                'card_title_fr' => "DÉPLACER L'INVENTAIRE EXCÉDENTAIRE",
                'card_description_eng' => null,
                'card_description_fr' => "Beaucoup d'entreprises ont un inventaire excédentaire -EX. Chambres ou tables vides, robes qui ne se vendent pas contre de l'argent, liquidations. Nous pouvons vous aider avec cela en le publicistant via Supertrade.",
                'image' => null
            ]
        ]);
    }
}
