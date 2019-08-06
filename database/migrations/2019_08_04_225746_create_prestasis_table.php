<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_kejuaraan')->unsigned();
            $table->date('prestasiTgl')->nullable();
            $table->string('prestasiTingkat')->nullable();
            $table->integer('prestasiJmlMedali')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prestasis');
    }
}
