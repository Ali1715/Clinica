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
        Schema::table('cirujias', function (Blueprint $table) {    
            $table->foreign(['PacienteID'], 'FK_cirujia_programa')->references(['id'])->on('pacientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['EquipoID'], 'FK_cirujia_realiza')->references(['id'])->on('equipos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cirujias', function (Blueprint $table) {     
            $table->dropForeign('FK_cirujia_programa');
            $table->dropForeign('FK_cirujia_realiza');
        });
    }
};
