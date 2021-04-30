<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio')->insert([
            [
                'filter'=>"filter-app",
                'image'=>"assets/img/portfolio/portfolio-1.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-app",
                'image'=>"assets/img/portfolio/portfolio-2.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-web",
                'image'=>"assets/img/portfolio/portfolio-3.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-card",
                'image'=>"assets/img/portfolio/portfolio-4.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-web",
                'image'=>"assets/img/portfolio/portfolio-5.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-web",
                'image'=>"assets/img/portfolio/portfolio-6.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-card",
                'image'=>"assets/img/portfolio/portfolio-7.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-web",
                'image'=>"assets/img/portfolio/portfolio-8.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-app",
                'image'=>"assets/img/portfolio/portfolio-9.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-card",
                'image'=>"assets/img/portfolio/portfolio-1.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-web",
                'image'=>"assets/img/portfolio/portfolio-2.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
            [
                'filter'=>"filter-app",
                'image'=>"assets/img/portfolio/portfolio-3.jpg",
                'lien'=>"portfolio-details.html",
                "created_at"=>now(),
            ],
        ]);
    }
}
