<?php namespace DigArt\Kino\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartKinoActors extends Migration
{
    public function up()
    {
        Schema::create('digart_kino_actors', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('digart_kino_actors');
    }
}
