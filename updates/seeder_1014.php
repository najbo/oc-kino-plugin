<?php namespace DigArt\Kino\Updates;

use Seeder;
use DigArt\Kino\Models\Show;

class Seeder1014 extends Seeder
{
    public function run()
    {
        Show::truncate();

        Show::create([
            'starts_at' => '2023-03-18 19:30:00',
            'movie' => 1,
            'status' => 1,
            'screen' => 1,
        ]);

        Show::create([
            'starts_at' => '2023-05-16 21:30:00',
            'movie' => 2,
            'status' => 1,
            'screen' => 1,
        ]);

        Show::create([
            'starts_at' => '2023-05-17 14:00:00',
            'movie' => 3,
            'status' => 1,
            'screen' => 1,
        ]);

        Show::create([
            'starts_at' => '2023-05-18 19:30:00',
            'movie' => 4,
            'status' => 1,
            'screen' => 1,
        ]);

        Show::create([
            'starts_at' => '2023-05-18 16:30:00',
            'movie' => 5,
            'status' => 1,
            'screen' => 2,
        ]);

        Show::create([
            'starts_at' => '2023-05-19 21:30:00',
            'movie' => 6,
            'status' => 1,
            'screen' => 2,
        ]);
    }
}
