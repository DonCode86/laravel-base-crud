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
        $item = config('comics');

        foreach($item as $comics) {
            $newComic = new Comic();
    
            $newComic->title = $comics['title'];
            $newComic->description =$comics['description'];
            $newComic->thumb =$comics['thumb'];
            $newComic->price =$comics['price'];
            $newComic->series =$comics['series'];
            $newComic->sale_date =$comics['sale_date'];
            $newComic->type =$comics['type'];
    
            $newComic->save();
        }
    }
}
