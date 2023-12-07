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
        Schema::table('transplantes', function (Blueprint $table) {  
            $table->foreign(['Historial_cirujiaID'], 'FK_Transplante_Historial_cirujia')->references(['id'])->on('historial_cirujias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transplantes', function (Blueprint $table) {    
            $table->dropForeign('FK_Transplante_Historial_cirujia');
        });
    }
};
