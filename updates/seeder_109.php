<?php namespace DigArt\Kino\Updates;

use Seeder;
use DigArt\Kino\Models\Genre;
javascript:;
class Seeder109 extends Seeder
{
    public function run()
    {
        Genre::truncate();

        Genre::create([
            'name' => 'Action',
        ]);
        
        Genre::create([
            'name' => 'Horror',
        ]);
        
        Genre::create([
            'name' => 'Drama',
        ]);
        Genre::create([
            'name' => 'Fantasy',
        ]);

        Genre::create([
            'name' => 'Comedy',
        ]);

        Genre::create([
            'name' => 'Romance',
        ]);
        
        Genre::create([
            'name' => 'Western',
        ]);
        
        Genre::create([
            'name' => 'Documentary',
        ]);
    }
}