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
        Schema::table('doctors', function (Blueprint $table) {   
            $table->foreign(['EspecialidadID'], 'FK_Doctor_Especialidad')->references(['id'])->on('especialidads');
            $table->foreign(['id'], 'FK_Doctor_Usuario')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {  
            $table->dropForeign('FK_Doctor_Especialidad');
            $table->dropForeign('FK_Doctor_Usuario');
        });
    }
};
