<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuerdos', function (Blueprint $table) {
            $table->increments('idRec');
            $table->string('recuerdo',280);
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recuerdos', function (Blueprint $table) {
            Schema::dropIfExists('recuerdos');
        });
    }
}