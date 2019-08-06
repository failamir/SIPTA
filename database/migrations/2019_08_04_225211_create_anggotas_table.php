<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_cabang')->unsigned();
            $table->integer('id_sabuk')->unsigned();
            $table->integer('id_dp')->unsigned();
            $table->string('anggotaNama')->nullable();
            $table->string('anggotaNim')->nullable();
            $table->string('anggotaPassword')->nullable();
            $table->string('anggotaRiwayatPenyakit')->nullable();
            $table->string('anggotaTglLahir')->nullable();
            $table->integer('anggotaHp')->nullable();
            $table->integer('anggotaAngkatan')->nullable();
            $table->string('anggotaJK')->nullable();
            $table->string('anggotaJur')->nullable();
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
        Schema::drop('anggotas');
    }
}
