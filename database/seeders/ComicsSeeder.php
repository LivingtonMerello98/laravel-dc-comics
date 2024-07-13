<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    public function run()
    {
        $comics = include(config_path('comics.php'));

        foreach ($comics as $comic) {
            $_comic = new Comic();
            $_comic->title = $comic['title'];
            $_comic->description = $comic['description'];
            $_comic->thumb = $comic['thumb'];
            $_comic->price = $comic['price'];
            $_comic->series = $comic['series'];
            $_comic->sale_date = $comic['sale_date'];
            $_comic->type = $comic['type'];
            $_comic->artists = json_encode($comic['artists']);
            $_comic->writers = json_encode($comic['writers']);
            $_comic->save(); // Salva il record nel database
        }
    }
}
