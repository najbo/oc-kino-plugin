<?php namespace DigArt\Kino\Updates;

use DigArt\Kino\Models\Screen;
use Seeder;

class Seeder1013 extends Seeder
{
    public function run()
    {
        Screen::truncate();

        Screen::create([
            'name' => 'laraREX 1',
            'seats' => 250,
        ]);

        Screen::create([
            'name' => 'laraREX 2',
            'seats' => 95,
        ]);
    }
}
