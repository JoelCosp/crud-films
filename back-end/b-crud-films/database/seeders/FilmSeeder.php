<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Film;  // IMPORTANTE: Importamos el modelo Film

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'title'=>'Iron Man ',
                'description'=>'El multimillonario fabricante de armas Tony Stark está realizando pruebas armamentísticas en el extranjero cuando unos terroristas lo secuestran para obligarle a construir un arma devastadora. Al conseguir escapar equipado con una armadura de última generación, se convierte en Iron Man, un héroe dedicado a combatir el mal en el mundo.',
                'img_url'=> 'https://static.wikia.nocookie.net/marvelcinematicuniverse/images/b/bf/Iron_Man_1_Portada.png/revision/latest/scale-to-width-down/1200?cb=20191029194450&path-prefix=es'
            ],
            [
                'title'=>'Iron Man 2',
                'description'=>'Con el mundo ahora consciente de que él es Iron Man, el millonario inventor Tony Stark debe forjar nuevas alianzas y enfrentarse a un nuevo y poderoso enemigo.',
                'img_url'=> 'https://static.wikia.nocookie.net/marvelcinematicuniverse/images/1/1a/Iron_Man_2_Poster_Oficial_Internacional.png/revision/latest?cb=20151006204823&path-prefix=es'
            ],
            [
                'title'=>'Iron Man 3',
                'description'=>'El descarado y brillante Tony Stark, tras ver destruido todo su universo personal, debe encontrar y enfrentarse a un enemigo cuyo poder no conoce límites. Este viaje pondrá a prueba su entereza una y otra vez, y le obligará a confiar en su ingenio.',
                'img_url'=> 'https://static.wikia.nocookie.net/marvelcinematicuniverse/images/1/1f/Iron_Man_3_Portada.png/revision/latest?cb=20191029194857&path-prefix=es'
            ]
        ];

        // Por cada pelicula, ejecutamos el CREATE y la añadimos en la tabla de FILMS
        foreach($films as $film){
            Film::create($film);
        }
    }
}
