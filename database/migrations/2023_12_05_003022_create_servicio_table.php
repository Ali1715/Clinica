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
        Schema::create('servicios', function (Blueprint $table) {     $table->timestamps();
            $table->timestamp('Fecha_hora')->nullable();
            $table->string('Nombre', 255)->nullable();
            $table->double('Total', 10, 2)->nullable();
            $table->id();
            $table->unsignedBigInteger('PacienteID')->index('FK_servicio_pertenece');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
};
