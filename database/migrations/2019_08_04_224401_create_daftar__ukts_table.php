<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDaftarUktsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar__ukts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_ukt')->unsigned();
            $table->integer('id_anggota')->unsigned();
            $table->string('duSabukUjian')->nullable();
            $table->string('duStatus');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('daftar__ukts');
    }
}
