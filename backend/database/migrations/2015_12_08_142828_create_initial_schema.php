<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flavors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('ram');
            $table->integer('cpu');
            $table->integer('disk');
            $table->double('hourly_rate');
        });

        Schema::create('images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('version');
            $table->string('type');
            $table->integer('min_ram');
            $table->integer('min_cpu');
            $table->integer('min_disk');
        });

        Schema::create('servers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('hostname');
            $table->string('ip');
            $table->string('status');
            $table->timestamps();

            $table->integer('flavor_id')->references('id')->on('flavors');
            $table->integer('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flavors');
        Schema::drop('images');
        Schema::drop('servers');
    }
}
