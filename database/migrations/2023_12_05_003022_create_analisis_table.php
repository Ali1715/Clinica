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
        Schema::create('analisis', function (Blueprint $table) {     
            $table->string('Descripcion', 255)->nullable();
            $table->string('Nombre', 255)->nullable();
            $table->double('Precio', 10, 2)->nullable();
            $table->id();
            $table->unsignedBigInteger('TipoID')->index('FK_Analisis_Tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analisis');
    }
};
