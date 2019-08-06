<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDaftarKejuaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar__kejuaraans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_kejuaraan')->unsigned();
            $table->integer('id_anggota')->unsigned();
            $table->integer('id_cabang')->unsigned();
            $table->string('dkTinggiBadan')->nullable();
            $table->string('dkBeratBadan')->nullable();
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
        Schema::drop('daftar__kejuaraans');
    }
}
