<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedung', function (Blueprint $table) {
            $table->increments('g_id')->unique();
            $table->integer('k_id')->unsigned();
            $table->foreign('k_id')
                ->references('k_id')
                ->on('kampus')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('g_nama');
            $table->string('g_lokasi');
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
        Schema::dropIfExists('gedung');
    }
}
