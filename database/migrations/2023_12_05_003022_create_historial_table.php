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
        Schema::create('historials', function (Blueprint $table) {     $table->timestamps();
            $table->string('Altura', 55)->nullable();
            $table->string('Ant_familiar', 255)->nullable();
            $table->string('Ant_personal', 255)->nullable();
            $table->char('Grupo_sanguineo', 3)->nullable();
            $table->string('Raza', 55)->nullable();
            $table->char('Sexo', 1)->nullable();
            $table->id();
            $table->unsignedBigInteger('PacienteID')->index('FK_Historial_Paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial');
    }
};
