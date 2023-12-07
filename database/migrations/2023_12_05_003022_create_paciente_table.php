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
        Schema::create('pacientes', function (Blueprint $table) {     $table->timestamps();
            $table->integer('Ci')->nullable();
            $table->string('Direccion', 0)->nullable();
            $table->string('Email', 255)->nullable();
            $table->string('Estado_civil', 55)->nullable();
            $table->dateTime('Fecha_nacimiento')->nullable();
            $table->string('Lugar_nacimiento', 255)->nullable();
            $table->string('Nacionalidad', 255)->nullable();
            $table->string('Nombre', 255)->nullable();
            $table->string('Profesion', 255)->nullable();
            $table->integer('Telefono')->nullable();
            $table->id();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
};
