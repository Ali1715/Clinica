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
        Schema::table('solicita_servicios', function (Blueprint $table) {     
            $table->foreign(['CitaID'], 'FK_solicita_Cita')->references(['id'])->on('citas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ServicioID'], 'FK_solicita_servicio')->references(['id'])->on('servicios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicita_servicios', function (Blueprint $table) {     
            $table->dropForeign('FK_solicita_Cita');
            $table->dropForeign('FK_solicita_servicio');
        });
    }
};
