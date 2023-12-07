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
        Schema::create('users', function (Blueprint $table) {    
            $table->id();
            $table->integer('Ci')->nullable();
            $table->string('Direccion', 255)->nullable();
            $table->string('email')->unique();
            $table->dateTime('Fecha_nacimiento')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('Profesion', 255)->nullable();
            $table->char('Sexo', 1)->nullable();
            $table->integer('Telefono')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
