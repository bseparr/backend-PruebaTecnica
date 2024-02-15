<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DispositivosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       // \DB::table('dispositivos')->delete();
        
        \DB::table('dispositivos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'S22',
                'id_modelo' => 1,
                'id_bodega' => 1
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => '13 Pro',
                'id_modelo' => 3,
                'id_bodega' => 1
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'A1',
                'id_modelo' => 2,
                'id_bodega' => 1
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => '10T',
                'id_modelo' => 5,
                'id_bodega' => 1
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'X4 Pro',
                'id_modelo' => 4,
                'id_bodega' => 1
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Joy-con',
                'id_modelo' => 6,
                'id_bodega' => 1
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'WiiMote',
                'id_modelo' => 8,
                'id_bodega' => 1
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Nunchuck',
                'id_modelo' => 8,
                'id_bodega' => 1
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Gamepad',
                'id_modelo' => 7,
                'id_bodega' => 1
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'WiiMote Plus',
                'id_modelo' => 8,
                'id_bodega' => 1
            ),
        ));
        
        
    }
}