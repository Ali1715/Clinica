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
        Schema::create('serv_analisis', function (Blueprint $table) {     $table->timestamps();
            $table->id();
            $table->unsignedBigInteger('ServicioID')->nullable()->index('FK_serv_analisis_servicio');
            $table->unsignedBigInteger('AnalisisID')->nullable()->index('FK_serv_analisis_Analisis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serv_analisis');
    }
};
