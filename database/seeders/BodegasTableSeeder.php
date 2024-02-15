<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BodegasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      //  \DB::table('bodegas')->delete();
        
        \DB::table('bodegas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Ripley',
            ),
        ));
        
        
    }
}