<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                'nombre'=>123,
                'logo'=>'icofont-simple-smile',
                'gras'=>"Happy Clients",
                'normal'=>"consequuntur quae",
                "created_at"=>now(),
            ],
            [
                'nombre'=>456,
                'logo'=>'icofont-document-folder',
                'gras'=>"Projects",
                'normal'=>"adipisci atque cum quia aut",
                "created_at"=>now(),
            ],
            [
                'nombre'=>789,
                'logo'=>'icofont-live-support',
                'gras'=>"Hours Of Support ",
                'normal'=>"aut commodi quaerat",
                "created_at"=>now(),
            ],
            [
                'nombre'=>10,
                'logo'=>'icofont-users-alt-5',
                'gras'=>"Hard Workers",
                'normal'=>"rerum asperiores dolor",
                "created_at"=>now(),
            ],
        ]);
    }
}
