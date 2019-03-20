<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roads_id')->unsigned();
            $table->integer('default_sec')->nullable();
            $table->integer('now_sec')->nullable();
            $table->integer('varia_sec')->nullable();
            $table->integer('default_max_car')->default(5);
            $table->integer('now_car')->default(0);
            $table->integer('now_direct')->default(1);
            $table->timestamps();
            $table->foreign('roads_id')
                ->references('id')
                ->on('roads')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->index('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lights');
    }
}