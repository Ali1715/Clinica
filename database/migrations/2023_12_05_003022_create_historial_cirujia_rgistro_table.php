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
        Schema::create('historial_cirujia_rgistros', function (Blueprint $table) {     $table->timestamps();
            $table->unsignedBigInteger('Historial_cirujiaID')->index('FK_registra_Historial_Cirujia');
            $table->unsignedBigInteger('CirujiaID')->index('FK_registra_cirujia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_cirujia_rgistro');
    }
};
