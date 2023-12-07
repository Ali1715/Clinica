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
        Schema::table('historial_clinicos', function (Blueprint $table) {   
            $table->foreign(['id'], 'FK_Historial_Clinico_Historial')->references(['id'])->on('historials')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ConsultaID'], 'FK_Historial_Clinico_registra')->references(['id'])->on('consultas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historial_clinicos', function (Blueprint $table) {     
            $table->dropForeign('FK_Historial_Clinico_Historial');
            $table->dropForeign('FK_Historial_Clinico_registra');
        });
    }
};
