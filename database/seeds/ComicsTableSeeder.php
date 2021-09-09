<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comic = config('comics');

        foreach($array_comic as $comic){

            // creiamo un'istanza
            $newComic = new Comic();
            $newComic->title= $comic['title'];
            $newComic->description= $comic['description'];
            $newComic->thumb= $comic['thumb'];
            $newComic->price= $comic['price'];
            $newComic->series= $comic['series'];
            $newComic->type= $comic['type'];
    
            $newComic->save();
        }



       
    }
}
