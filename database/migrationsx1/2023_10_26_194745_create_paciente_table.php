<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {     $table->timestamps();
            $table->foreignId('usuario_id')->primary()->constrained('users');
            $table->string('estado_civil')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('profesion')->nullable();
            $table->string('raza')->nullable();
            $table->string('residencia_actual')->nullable();
            $table->string('grupo_sanguineo_abo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
