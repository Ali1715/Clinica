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
        Schema::table('tratamientoshclis', function (Blueprint $table) {   
            $table->foreign(['Historial_clinicoID'], 'FK_Tratamientoshcli_Historial_clinico')->references(['id'])->on('historial_clinicos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tratamientoshclis', function (Blueprint $table) {  
            $table->dropForeign('FK_Tratamientoshcli_Historial_clinico');
        });
    }
};
