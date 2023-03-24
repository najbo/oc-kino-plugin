<?php namespace DigArt\Kino\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartKinoStatus extends Migration
{
    public function up()
    {
        Schema::create('digart_kino_status', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->boolean('is_frontend')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('digart_kino_status');
    }
}