<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePistasTable extends Migration
{
    public function up()
    {
        Schema::create('pistas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_cedula'); // Ensure this matches the type of 'cedula' in 'participantes'
            $table->string('titulo');
            $table->text('pista');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('fk_cedula')
                  ->references('cedula')
                  ->on('participantes')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pistas');
    }
}
