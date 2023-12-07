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
        Schema::table('resultados', function (Blueprint $table) {     
            $table->foreign(['Serv_analisisID'], 'FK_Resultado_Serv_analisis')->references(['id'])->on('serv_analisis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultados', function (Blueprint $table) {     
            $table->dropForeign('FK_Resultado_Serv_analisis');
        });
    }
};
