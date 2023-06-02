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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('id_vehiculo');
            $table->string('empresa');
            $table->string('placa');
            $table->unsignedBigInteger('id_propietario');
            $table->foreign('id_propietario')->references('id_entidad')->on('entidades');
            $table->unsignedBigInteger('id_chofer');
            $table->foreign('id_chofer')->references('id_entidad')->on('entidades');
            $table->string('numero_municipal');
            $table->string('estado_inspeccion');
            $table->date('fecha_inspeccion');
            $table->string('curso_vial');
            $table->string('estado_credencial');
            $table->date('fecha_credencial');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
