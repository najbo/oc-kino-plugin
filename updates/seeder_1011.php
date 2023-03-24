<?php namespace DigArt\Kino\Updates;

use Seeder;
use DigArt\Kino\Models\Actor;

class Seeder1011 extends Seeder
{
    public function run()
    {
        Actor::truncate();

        Actor::create([
            'name' => 'Tom Cruise',
        ]);
        
        Actor::create([
            'name' => 'Ryan Reynolds',
        ]);
        
        Actor::create([
            'name' => 'Robert Redford',
        ]);
        Actor::create([
            'name' => 'Ben Kingsley',
        ]);

        Actor::create([
            'name' => 'Sam Worthington',
        ]);

        Actor::create([
            'name' => 'Sigourney Weaver',
        ]);
        
        Actor::create([
            'name' => 'Tim Robbins',
        ]);
        
        Actor::create([
            'name' => 'Nicole Kidman',
        ]);
    }
}