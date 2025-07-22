<?php

namespace Database\Seeders;

use App\Models\SuperFait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperFaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperFait::insert([
            [
                'language' => 'english',
                'title_eng' => 'Supertrade helps your business',
                'title_fr' => null,
                'btn_text_eng' => 'Join Now',
                'btn_text_fr' => null,
                'description_eng' => "Business owners understand the concept of making purchases based on the cost of goods. It's clear that by bartering, you gain new customers. These new relationships result in cash paying customer referrals. Supertrade offers businesses an innovative alternative to traditional capital sources through our AI powered B2B trading platform and Supertrade Credits; A Digital Trade Credit (DTC) system.",
                'description_fr' => null,
                'image' => "https://superinternaute.netlify.app/_next/static/media/girl.e8df5a9a.webp",
            ],
            [
                'language' => 'france',
                'title_eng' => null,
                'title_fr' => 'Supertrade aide votre entreprise',
                'btn_text_eng' => null,
                'btn_text_fr' => 'Rejoignez Maintenant',
                'description_eng' => null,
                'description_fr' => "Les propriétaires d'entreprise comprennent le concept de faire des compras basadas en el costo de los bienes. Es claro que al hacer trueque, ganas nuevos clientes. Estas nuevas relaciones resultan en referencias de clientes que pagan en efectivo. Supertrade ofrece a las empresas una alternativa innovadora a las fuentes de capital tradicionales a través de nuestra plataforma de comercio B2B impulsada por la IA y los Créditos Supertrade ; Un sistema de Crédito de Comercio Digital (DTC).",
                'image' => "https://superinternaute.netlify.app/_next/static/media/girl.e8df5a9a.webp",
            ],
        ]);
    }
}
