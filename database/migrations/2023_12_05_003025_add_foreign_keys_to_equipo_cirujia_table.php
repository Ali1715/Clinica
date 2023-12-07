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
        Schema::table('equipo_cirujias', function (Blueprint $table) {  
            $table->foreign(['EquipoID'], 'FK_pertenece_equipo')->references(['id'])->on('equipos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['UsuarioID'], 'FK_pertenece_Usuario')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipo_cirujias', function (Blueprint $table) {     
            $table->dropForeign('FK_pertenece_equipo');
            $table->dropForeign('FK_pertenece_Usuario');
        });
    }
};
