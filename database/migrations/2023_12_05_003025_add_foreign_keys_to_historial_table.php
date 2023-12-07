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
        Schema::table('historials', function (Blueprint $table) {    
            $table->foreign(['PacienteID'], 'FK_Historial_Paciente')->references(['id'])->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historials', function (Blueprint $table) {    
            $table->dropForeign('FK_Historial_Paciente');
        });
    }
};
