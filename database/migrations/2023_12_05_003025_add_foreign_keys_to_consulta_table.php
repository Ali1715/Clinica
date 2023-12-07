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
        Schema::table('consultas', function (Blueprint $table) {    
            $table->foreign(['PacienteID'], 'FK_Consulta_realiza')->references(['id'])->on('pacientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['CitaID'], 'FK_Consulta_solicita')->references(['id'])->on('citas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultas', function (Blueprint $table) {   
            $table->dropForeign('FK_Consulta_realiza');
            $table->dropForeign('FK_Consulta_solicita');
        });
    }
};
