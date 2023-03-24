<?php namespace DigArt\Kino\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartKinoShowUser extends Migration
{
    public function up()
{
    Schema::create('digart_kino_show_user', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('user_id')->unsigned();
        $table->integer('show_id')->unsigned();
        $table->timestamp('created_at')->nullable();
        $table->primary(['user_id','show_id']);
    });
}

public function down()
{
    Schema::dropIfExists('digart_kino_show_user');
}
}