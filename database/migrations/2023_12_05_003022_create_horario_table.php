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
        Schema::create('horarios', function (Blueprint $table) {     $table->timestamps();
            $table->string('Dia', 255)->nullable();
            $table->time('Hora_fin')->nullable();
            $table->time('Hora_inicio')->nullable();
            $table->integer('Intervalos')->nullable();
            $table->integer('Turnos_disponibles')->nullable();
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario');
    }
};
