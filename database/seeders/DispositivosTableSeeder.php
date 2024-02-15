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
                'nombre' => 'S23 Ultra',
                'id_modelo' => 1,
                'id_bodega' => 3
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => '15 Pro Max',
                'id_modelo' => 9,
                'id_bodega' => 2
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => '15 Pro',
                'id_modelo' => 9,
                'id_bodega' => 2
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => '14 Pro',
                'id_modelo' => 9,
                'id_bodega' => 3
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => '14 Pro Max',
                'id_modelo' => 9,
                'id_bodega' => 3
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Pro 12,9" (M2)',
                'id_modelo' => 10,
                'id_bodega' => 4
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Pro 11" (M2)',
                'id_modelo' => 10,
                'id_bodega' => 4
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Pro 16" (M3 Pro)',
                'id_modelo' => 11,
                'id_bodega' => 4
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Pro 16" (M2 Pro)',
                'id_modelo' => 11,
                'id_bodega' => 4
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => '13 Pro',
                'id_modelo' => 3,
                'id_bodega' => 1
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'A1',
                'id_modelo' => 2,
                'id_bodega' => 1
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => '10T',
                'id_modelo' => 5,
                'id_bodega' => 2
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'X4 Pro',
                'id_modelo' => 4,
                'id_bodega' => 3
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Joy-con',
                'id_modelo' => 6,
                'id_bodega' => 1
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'WiiMote',
                'id_modelo' => 8,
                'id_bodega' => 1
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Nunchuck',
                'id_modelo' => 8,
                'id_bodega' => 1
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'Gamepad',
                'id_modelo' => 7,
                'id_bodega' => 1
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'WiiMote Plus',
                'id_modelo' => 8,
                'id_bodega' => 1
            ),
        ));
        
        
    }
}