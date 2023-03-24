<?php namespace DigArt\Kino\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartKinoFavorites extends Migration
{
    public function up()
    {
        Schema::create('digart_kino_favorites', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('favorited_at');
            $table->integer('user_id')->unsigned();
            $table->integer('favoritable_id')->unsigned();
            $table->string('favoritable_type');
            $table->index(['favoritable_id', 'favoritable_type'], 'Index_id_type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('digart_kino_favorites');
    }
}