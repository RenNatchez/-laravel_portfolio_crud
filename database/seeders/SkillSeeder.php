<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'name'=>"HTML",
                'level'=>"100",
                "created_at"=>now(),
            ],
            [
                'name'=>"PHP",
                'level'=>"50",
                "created_at"=>now(),
            ],
            [
                'name'=>"CSS",
                'level'=>"15",
                "created_at"=>now(),
            ],
            [
                'name'=>"WORDPRESS/CMS",
                'level'=>"96",
                "created_at"=>now(),
            ],
            [
                'name'=>"JAVASCRIPT",
                'level'=>"64",
                "created_at"=>now(),
            ],
            [
                'name'=>"PHOTOSHOP",
                'level'=>"80",
                "created_at"=>now(),
            ],
        ]);
    }
}
