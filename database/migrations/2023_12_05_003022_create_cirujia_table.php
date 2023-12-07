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
        Schema::create('cirujias', function (Blueprint $table) {     
            $table->timestamps();
            $table->timestamp('Fecha_hora')->nullable();
            $table->integer('Sala')->nullable();
            $table->id();
            $table->unsignedBigInteger('PacienteID')->index('FK_cirujia_programa');
            $table->unsignedBigInteger('EquipoID')->index('FK_cirujia_realiza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cirujia');
    }
};
