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
        Schema::create('turno_horarios', function (Blueprint $table) {     $table->timestamps();
            $table->string('Estado', 55)->nullable();
            $table->timestamp('Fecha_hora')->nullable();
            $table->id();
            $table->unsignedBigInteger('TurnoID')->index('FK_turno_horario_Turno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turno_horario');
    }
};
