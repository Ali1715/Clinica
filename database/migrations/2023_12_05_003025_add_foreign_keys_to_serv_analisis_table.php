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
        Schema::table('serv_analisis', function (Blueprint $table) {   
            $table->foreign(['AnalisisID'], 'FK_serv_analisis_Analisis')->references(['id'])->on('analisis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ServicioID'], 'FK_serv_analisis_servicio')->references(['id'])->on('servicios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('serv_analisis', function (Blueprint $table) {     
            $table->dropForeign('FK_serv_analisis_Analisis');
            $table->dropForeign('FK_serv_analisis_servicios');
        });
    }
};
