<?php namespace DigArt\Kino\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartKinoShows extends Migration
{
    public function up()
    {
        Schema::create('digart_kino_shows', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('starts_at');
            $table->integer('movie_id')->nullable()->unsigned();
            $table->integer('status_id')->nullable()->unsigned();
            $table->integer('screen_id')->nullable()->unsigned();
            $table->string('comment')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('digart_kino_shows');
    }
}
