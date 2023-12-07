<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_cirujias', function (Blueprint $table) {     $table->timestamps();
            $table->unsignedBigInteger('EquipoID')->index('FK_pertenece_equipo');
            $table->unsignedBigInteger('UsuarioID')->index('FK_pertenece_Usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_cirujia');
    }
};
