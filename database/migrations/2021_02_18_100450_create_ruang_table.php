<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruang', function (Blueprint $table) {
            $table->increments('r_id')->unique();
            $table->integer('g_id')->unsigned();
            $table->foreign('g_id')
                ->references('g_id')
                ->on('gedung')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('r_nama');
            $table->string('r_lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruang');
    }
}
