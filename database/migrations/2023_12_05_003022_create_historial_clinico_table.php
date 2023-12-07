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
        Schema::create('historial_clinicos', function (Blueprint $table) {     $table->timestamps();
            $table->string('Enf_actual', 255)->nullable();
            $table->timestamp('Fecha_hora')->nullable();
            $table->string('Hip_diagnostico', 255)->nullable();
            $table->id();
            $table->unsignedBigInteger('ConsultaID')->index('FK_Historial_Clinico_registra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_clinico');
    }
};
