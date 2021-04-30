<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateur')->insert([
            [
                'identite'=>"Natchez Renders",
                'anniversaire'=>"1 May 2565",
                'image'=>"assets/img/profile-img.jpg",
                'poste'=>"Web Developer.",
                'age'=>"39",
                'site'=>"www.example.com",
                'degree'=>"Master",
                'phone'=>"0476 95 64 78",
                'mail'=>"test@example.com",
                'ville'=>"Denver, USA",
                'statut'=>"Available",
                'description'=>"Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.",
                "created_at"=>now(),
            ],
        ]);

    }
}
