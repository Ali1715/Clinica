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
        Schema::create('consultas', function (Blueprint $table) {     $table->timestamps();
            $table->string('Diagnostico', 255)->nullable();
            $table->timestamp('Fechahora')->nullable();
            $table->string('Instrucciones', 255)->nullable();
            $table->string('Motivo', 255)->nullable();
            $table->string('Observacion', 255)->nullable();
            $table->id();
            $table->unsignedBigInteger('CitaID')->index('FK_Consulta_solicita');
            $table->unsignedBigInteger('PacienteID')->index('FK_Consulta_realiza');
            $table->unsignedBigInteger('DoctorID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta');
    }
};
