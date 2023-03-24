<?php namespace DigArt\Kino\Updates;

use Seeder;
use DigArt\Kino\Models\Status;
class Seeder1012 extends Seeder
{
    public function run()
    {
        Status::truncate();

        Status::create([
            'name' => 'Published',
            'is_frontend' => 1,
        ]);

        Status::create([
            'name' => 'Draft',
            'is_frontend' => 0,
        ]);

        Status::create([
            'name' => 'Private show',
            'is_frontend' => 0,
        ]);
    }
}