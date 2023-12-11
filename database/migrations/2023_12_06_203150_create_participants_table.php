<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cedula')->unique();
            $table->string('nombre', 200);
            $table->string('p_apellido', 100);
            $table->string('s_apellido', 100);
            $table->date('f_nacimiento');
            $table->string('agencia', 200);
            $table->string('ciudad', 200);
            $table->string('genero', 200);
            $table->string('departamento', 200);
            $table->integer('telefono');
            $table->integer('sumatoria')->nullable();
            $table->integer('estado')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
