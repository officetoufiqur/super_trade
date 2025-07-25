<?php

namespace Database\Seeders;

use App\Models\JoinForm;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            BannerSeeder::class,
            NavbarSeeder::class,
            SupertradeSeeder::class,
            SuperFaitSeeder::class,
            FooterSeeder::class,
            AboutSeeder::class,
            BannerCMSSeeder::class,
            ServiceSeeder::class,
            JoinNowSeeder::class,
            JoinFormSeeder::class,
            JoinWhyChooseSeeder::class,
            JoinCardSeeder::class,
            BenefitSeeder::class,
            FaqSeeder::class,
        ]);
    }
}
