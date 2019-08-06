<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKejuaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kejuaraans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('kejNama')->nullable();
            $table->string('kejTglBatas')->nullable();
            $table->text('kejDeskripsi')->nullable();
            $table->string('kejStatus');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kejuaraans');
    }
}
