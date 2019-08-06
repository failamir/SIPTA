<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUktsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('uktKode')->nullable();
            $table->string('uktPeriode')->nullable();
            $table->text('uktDeskripsi')->nullable();
            $table->date('uktTglDeskripsi')->nullable();
            $table->string('uktStatus');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ukts');
    }
}
