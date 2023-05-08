<?php namespace DigArt\Kino\Updates;

use Seeder;
use Db;

class Seeder1018 extends Seeder
{
    public function run()
    {
        Db::table('digart_kino_actor_movie')->truncate();
        
        Db::table('digart_kino_actor_movie')->insert([
            ['movie_id' => 5, 'actor_id' => 6],
            ['movie_id' => 4, 'actor_id' => 5],
            ['movie_id' => 3, 'actor_id' => 2],
            ['movie_id' => 6, 'actor_id' => 1],
            ['movie_id' => 1, 'actor_id' => 3],
            ['movie_id' => 1, 'actor_id' => 4],
            ['movie_id' => 2, 'actor_id' => 1],
            ['movie_id' => 2, 'actor_id' => 7],
        ]);
    }
}