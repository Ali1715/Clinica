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
        Schema::table('indicadoreshcirujias', function (Blueprint $table) {     
            $table->foreign(['Historial_cirujiaID'], 'FK_Indicadoreshcirujia_Historial_cirujia')->references(['id'])->on('historial_cirujias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Tipo_indID'], 'FK_indicadoresHCirujia_pertenece')->references(['id'])->on('tipo_inds')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indicadoreshcirujias', function (Blueprint $table) {     
            $table->dropForeign('FK_Indicadoreshcirujia_Historial_cirujia');
            $table->dropForeign('FK_indicadoresHCirujia_pertenece');
        });
    }
};
