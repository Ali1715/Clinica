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
        Schema::table('historial_cirujia_rgistros', function (Blueprint $table) {     
            $table->foreign(['CirujiaID'], 'FK_registra_cirujia')->references(['id'])->on('cirujias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['Historial_cirujiaID'], 'FK_registra_Historial_Cirujia')->references(['id'])->on('historial_cirujias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historial_cirujia_rgistros', function (Blueprint $table) {    
            $table->dropForeign('FK_registra_cirujia');
            $table->dropForeign('FK_registra_Historial_Cirujia');
        });
    }
};
