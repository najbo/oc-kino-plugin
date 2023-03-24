<?php namespace DigArt\Kino\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableCreateDigartKinoMovies extends Migration
{
    public function up()
    {
        Schema::create('digart_kino_movies', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->slug('name', 255);
            $table->text('description')->nullable();
            $table->text('teaser')->nullable();
            $table->string('directors')->nullable();
            $table->integer('genre_id')->nullable()->unsigned();
            $table->smallInteger('year')->nullable()->unsigned();
            $table->smallInteger('runtime')->nullable()->unsigned();
            $table->decimal('rating', 10, 2)->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->unique(['slug']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('digart_kino_movies');
    }
}
