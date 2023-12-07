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
        Schema::table('recetas', function (Blueprint $table) {     
            $table->foreign(['Historial_clinicoID'], 'FK_receta_Historial_Clinico')->references(['id'])->on('historial_clinicos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['MedicamentoID'], 'FK_receta_medicamento')->references(['id'])->on('medicamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recetas', function (Blueprint $table) {     
            $table->dropForeign('FK_receta_Historial_Clinico');
            $table->dropForeign('FK_receta_medicamento');
        });
    }
};
