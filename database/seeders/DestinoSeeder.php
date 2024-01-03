<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinoSeeder extends Seeder
{
    public function run()
    {
        // Destinos en París
        DB::table('destinos')->insert([
            'nombre' => 'Torre Eiffel',
            'descripcion' => 'Icono emblemático de París, ofrece impresionantes vistas de la ciudad.',
            'precio' => 50.00,
            'imagen' => 'torre_eiffel.jpg',
        ]);

        DB::table('destinos')->insert([
            'nombre' => 'Louvre',
            'descripcion' => 'El museo más grande del mundo, hogar de la Mona Lisa y otras obras maestras.',
            'precio' => 40.00,
            'imagen' => 'louvre.jpg',
        ]);

        // Destinos en Roma
        DB::table('destinos')->insert([
            'nombre' => 'Coliseo',
            'descripcion' => 'Anfiteatro romano antiguo, escenario de espectáculos y batallas.',
            'precio' => 60.00,
            'imagen' => 'coliseo.jpg',
        ]);

        DB::table('destinos')->insert([
            'nombre' => 'Ciudad del Vaticano',
            'descripcion' => 'Sede de la Iglesia Católica, con la Basílica de San Pedro y los Museos Vaticanos.',
            'precio' => 55.00,
            'imagen' => 'vaticano.jpg',
        ]);

        // Destinos en Barcelona
        DB::table('destinos')->insert([
            'nombre' => 'Sagrada Familia',
            'descripcion' => 'Famosa basílica diseñada por Antoni Gaudí, aún en construcción.',
            'precio' => 35.00,
            'imagen' => 'sagrada_familia.jpg',
        ]);

        DB::table('destinos')->insert([
            'nombre' => 'La Rambla',
            'descripcion' => 'Avenida peatonal llena de vida con tiendas, restaurantes y artistas callejeros.',
            'precio' => 25.00,
            'imagen' => 'rambla.jpg',
        ]);

    }
}
