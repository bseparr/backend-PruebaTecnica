<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModelosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('modelos')->delete();
        
        \DB::table('modelos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Galaxy',
                'id_marca' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Redmi',
                'id_marca' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Redmi Note',
                'id_marca' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'POCO',
                'id_marca' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Mi',
                'id_marca' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Switch',
                'id_marca' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'WiiU',
                'id_marca' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Wii',
                'id_marca' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'iPhone',
                'id_marca' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'iPad',
                'id_marca' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Mac',
                'id_marca' => 2,
            ),
        ));
        
        
    }
}