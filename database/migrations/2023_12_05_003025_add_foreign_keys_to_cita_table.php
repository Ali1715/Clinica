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
        Schema::table('citas', function (Blueprint $table) {   
            $table->foreign(['EspecialidadID'], 'FK_Cita_Especialidad')->references(['id'])->on('especialidads');
            $table->foreign(['TurnoID'], 'FK_Cita_pertenece')->references(['id'])->on('turnos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['PersonalID'], 'FK_Cita_registra')->references(['id'])->on('personals')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['PacienteID'], 'FK_Cita_solicita')->references(['id'])->on('pacientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {    
            $table->dropForeign('FK_Cita_Especialidad');
            $table->dropForeign('FK_Cita_pertenece');
            $table->dropForeign('FK_Cita_registra');
            $table->dropForeign('FK_Cita_solicita');
        });
    }
};
