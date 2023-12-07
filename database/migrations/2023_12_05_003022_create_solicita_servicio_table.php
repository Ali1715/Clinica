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
        Schema::create('solicita_servicios', function (Blueprint $table) {     $table->timestamps();
            $table->unsignedBigInteger('ServicioID')->index('FK_solicita_servicio');
            $table->unsignedBigInteger('CitaID')->index('FK_solicita_Cita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicita_servicio');
    }
};
