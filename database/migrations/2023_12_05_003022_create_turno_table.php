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
        Schema::create('turnos', function (Blueprint $table) {     $table->timestamps();
            $table->time('Hora_fin')->nullable();
            $table->time('Hora_inicio')->nullable();
            $table->id();
            $table->unsignedBigInteger('DoctorID')->nullable()->index('FK_Turno_Doctor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turno');
    }
};
