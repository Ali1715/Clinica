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
        Schema::create('indicadoreshcirujias', function (Blueprint $table) {     $table->timestamps();
            $table->string('Nombre', 255)->nullable();
            $table->string('Valor', 255)->nullable();
            $table->id();
            $table->unsignedBigInteger('Historial_cirujiaID')->index('FK_Indicadoreshcirujia_Historial_cirujia');
            $table->unsignedBigInteger('Tipo_indID')->index('FK_indicadoresHCirujia_pertenece');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadoreshcirujia');
    }
};
