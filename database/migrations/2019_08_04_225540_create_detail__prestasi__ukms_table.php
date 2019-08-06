<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailPrestasiUkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail__prestasi__ukms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_restasi')->unsigned();
            $table->string('dpJuara')->nullable();
            $table->string('dpMedali')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detail__prestasi__ukms');
    }
}
