<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chollo;

class ChollosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Chollo::create([
            'titulo' => 'Ordenador Gaming',
            'descripcion' => 'intel i5, grafica 3090 rtx',
            'categoria' => 'Electrónica',
            'puntuacion' => 5,
            'precio' => 100,
            'precio_descuento' => 80,
            'url' => 'https://example.com/chollo1',
            'disponible' => true,
        ]);

        Chollo::create([
            'titulo' => 'TV Samsung 75',
            'descripcion' => 'tv de 75 pulgadas',
            'categoria' => 'Electronica',
            'puntuacion' => 4,
            'precio' => 50,
            'precio_descuento' => 30,
            'url' => 'https://example.com/chollo2',
            'disponible' => true,
        ]);

    }
}
