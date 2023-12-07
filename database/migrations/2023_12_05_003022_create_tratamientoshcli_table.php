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
        Schema::create('tratamientoshclis', function (Blueprint $table) {     $table->timestamps();
            $table->string('Descripcion', 255)->nullable();
            $table->string('Nombre', 255)->nullable();
            $table->id();
            $table->unsignedBigInteger('Historial_clinicoID')->index('FK_Tratamientoshcli_Historial_clinico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tratamientoshcli');
    }
};
