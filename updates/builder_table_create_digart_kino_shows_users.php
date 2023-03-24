<?php namespace DigArt\Kino\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartKinoShowsUsers extends Migration
{
    public function up()
    {
        Schema::create('digart_kino_shows_users', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('show_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('group_id')->nullable()->unsigned();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->unique(['show_id', 'user_id', 'group_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('digart_kino_shows_users');
    }
}
