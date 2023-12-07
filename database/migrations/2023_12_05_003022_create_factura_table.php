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
        Schema::create('facturas', function (Blueprint $table) {     $table->timestamps();
            $table->integer('Ci')->nullable();
            $table->double('Descuento', 10, 2)->nullable();
            $table->timestamp('Fecha_hora')->nullable();
            $table->integer('Nit')->nullable();
            $table->string('Nombre', 255)->nullable();
            $table->double('Total', 10, 2)->nullable();
            $table->id();
            $table->unsignedBigInteger('ServicioID')->index('FK_factura_genera');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
};
