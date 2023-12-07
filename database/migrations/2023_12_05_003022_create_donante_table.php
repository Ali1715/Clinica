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
        Schema::create('donantes', function (Blueprint $table) {     $table->timestamps();
            $table->string('Causa_obito', 555)->nullable();
            $table->string('Hla', 255)->nullable();
            $table->string('Lista_problemas', 255)->nullable();
            $table->string('Tipo', 30)->nullable();
            $table->id();
            $table->unsignedBigInteger('Historial_cirujiaID')->index('FK_Donante_Historial_cirujia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donante');
    }
};
