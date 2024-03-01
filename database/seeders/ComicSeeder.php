<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models 
use App\Models\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //prendo dati dal file comics.php nel config folder
        $comicsData = config('comics');

        foreach ($comicsData as $index => $singleComic) {
             
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            
            $explodePrice = str_replace('$', '', $singleComic['price']);
            $comic->price = floatval($explodePrice);

            $comic->series = $singleComic['series'];
            $comic->sale_date = $singleComic['sale_date'];
            $comic->type = $singleComic['type'];

            $comic->artists = implode( ',' , $singleComic['artists']);
            $comic->writers = implode (',', $singleComic['writers']);

            $comic->save();
            //dd($comic);
        };
        
    }
}
