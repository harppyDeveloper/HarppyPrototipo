<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Recseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recuerdos')->insert([
            'recuerdo' => 'Fui a un concierto de TWICE',
            'date' => 20170719
        ]);

        DB::table('recuerdos')->insert([
            'recuerdo' => 'Sali con mi novio',
            'date' => 20210214
        ]);

        DB::table('recuerdos')->insert([
            'recuerdo' => 'Mis papas me compraron robux',
            'date' => 20190827
        ]);

        DB::table('recuerdos')->insert([
            'recuerdo' => 'Fue mi cumpleaños',
            'date' => 20211121
        ]);

        DB::table('recuerdos')->insert([
            'recuerdo' => 'Me gradue de la secundaria',
            'date' => 20190705
        ]);
    }
}