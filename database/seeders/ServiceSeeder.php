<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'logo'=>"icofont-computer",
                'titre'=>"Lorem Ipsum",
                'description'=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at"=>now(),
            ],
            [
                'logo'=>"icofont-chart-bar-graph",
                'titre'=>"Dolor Sitema",
                'description'=>"Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
                "created_at"=>now(),
            ],
            [
                'logo'=>"icofont-earth",
                'titre'=>"Sed ut perspiciatis",
                'description'=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at"=>now(),
            ],
            [
                'logo'=>"icofont-image",
                'titre'=>"Magni Dolores",
                'description'=>"Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
                "created_at"=>now(),
            ],
            [
                'logo'=>"icofont-settings",
                'titre'=>"Nemo Enim",
                'description'=>"Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
                "created_at"=>now(),
            ],
            [
                'logo'=>"icofont-tasks-alt",
                'titre'=>"Eiusmod Tempor",
                'description'=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at"=>now(),
            ],
        ]);
    }
}
