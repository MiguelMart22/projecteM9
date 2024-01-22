<?php

namespace Database\Seeders;

use App\Models\Destino;
use Illuminate\Database\Seeder;

class DestinoSeeder extends Seeder
{
    public function run()
    {
        // Destinos en París
        Destino::create([
            'nombre' => 'Torre Eiffel',
            'descripcion' => 'Icono emblemático de París, ofrece impresionantes vistas de la ciudad.',
            'precio' => 50.00,
            'imagen' => 'images/torre_eiffel.jpg',
        ]);

        Destino::create([
            'nombre' => 'Louvre',
            'descripcion' => 'El museo más grande del mundo, hogar de la Mona Lisa y otras obras maestras.',
            'precio' => 40.00,
            'imagen' => 'images/louvre.jpg',
        ]);

        // Destinos en Roma
        Destino::create([
            'nombre' => 'Coliseo',
            'descripcion' => 'Anfiteatro romano antiguo, escenario de espectáculos y batallas.',
            'precio' => 60.00,
            'imagen' => 'images/coliseo.jpg',
        ]);

        Destino::create([
            'nombre' => 'Ciudad del Vaticano',
            'descripcion' => 'Sede de la Iglesia Católica, con la Basílica de San Pedro y los Museos Vaticanos.',
            'precio' => 55.00,
            'imagen' => 'images/vaticano.jpg',
        ]);

        // Destinos en Barcelona
        Destino::create([
            'nombre' => 'Sagrada Familia',
            'descripcion' => 'Famosa basílica diseñada por Antoni Gaudí, aún en construcción.',
            'precio' => 35.00,
            'imagen' => 'images/sagrada_familia.jpg',
        ]);

        
        Destino::create([
            'nombre' => 'La Rambla',
            'descripcion' => 'Avenida peatonal llena de vida con tiendas, restaurantes y artistas callejeros.',
            'precio' => 25.00,
            'imagen' => 'images/rambla.jpg',
        ]);

        //Destiono en Chisinau
        Destino::create([
            'nombre' => 'Estatua de Lenin',
            'descripcion' => 'Estatua en homenaje a Lenin en la capital de moldavia (Chisináu).',
            'precio' => 50.00,
            'imagen' => 'images/estatuaLenin.jpg',
        ]);
    }
    }
}
