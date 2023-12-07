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
        Schema::create('citas', function (Blueprint $table) {     $table->timestamps();
            $table->timestamp('Fechahora')->nullable();
            $table->id();
            $table->unsignedBigInteger('PacienteID')->index('FK_Cita_solicita');
            $table->unsignedBigInteger('PersonalID')->index('FK_Cita_registra');
            $table->unsignedBigInteger('TurnoID')->index('FK_Cita_pertenece');
            $table->unsignedBigInteger('EspecialidadID')->index('FK_Cita_Especialidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
};
