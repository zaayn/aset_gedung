<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampus', function (Blueprint $table) {
            $table->increments('k_id')->unique();
            $table->string('email');
            $table->foreign('email')
                ->references('email')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('k_nama');
            $table->string('k_lokasi');
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
        Schema::dropIfExists('kampus');
    }
}
