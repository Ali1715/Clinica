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
        Schema::create('consultas', function (Blueprint $table) {     $table->timestamps();
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors', 'usuario_id');
            $table->foreignId('paciente_id')->constrained('pacientes', 'usuario_id');
            $table->string('diagnotico');
            $table->date('fecha');
            $table->time('hora');
            $table->string('instrucciones');
            $table->string('motivo')->constrained('citas', 'motivo');  
            $table->string('observacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
