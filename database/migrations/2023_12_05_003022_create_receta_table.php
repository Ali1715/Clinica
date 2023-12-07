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
        Schema::create('recetas', function (Blueprint $table) {     $table->timestamps();
            $table->string('Indicaciones', 255)->nullable();
            $table->id();
            $table->unsignedBigInteger('Historial_clinicoID')->index('FK_receta_Historial_Clinico');
            $table->unsignedBigInteger('MedicamentoID')->index('FK_receta_medicamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receta');
    }
};
