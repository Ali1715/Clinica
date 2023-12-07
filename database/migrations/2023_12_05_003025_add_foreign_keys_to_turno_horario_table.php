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
        Schema::table('turno_horarios', function (Blueprint $table) {   
            $table->foreign(['TurnoID'], 'FK_turno_horario_Turno')->references(['id'])->on('turnos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turno_horarios', function (Blueprint $table) {   
            $table->dropForeign('FK_turno_horario_Turno');
        });
    }
};
