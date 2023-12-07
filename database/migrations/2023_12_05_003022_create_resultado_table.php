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
        Schema::create('resultados', function (Blueprint $table) {     $table->timestamps();
            $table->timestamp('Fecha_hora')->nullable();
            $table->string('Resultado', 255)->nullable();
            $table->id();
            $table->unsignedBigInteger('Serv_analisisID')->index('FK_Resultado_Serv_analisis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado');
    }
};
