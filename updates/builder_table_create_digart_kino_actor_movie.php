<?php namespace DigArt\Kino\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartKinoActorMovie extends Migration
{
    public function up()
    {
        Schema::create('digart_kino_actor_movie', function($table) {
            $table->integer('movie_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->primary(['movie_id', 'actor_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('digart_kino_actor_movie');
    }
}
