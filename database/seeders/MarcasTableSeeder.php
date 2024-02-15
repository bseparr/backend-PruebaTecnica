<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('marcas')->delete();
        
        \DB::table('marcas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Samsung',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'LG',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Xiaomi',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Nintendo',
            ),
        ));
        
        
    }
}