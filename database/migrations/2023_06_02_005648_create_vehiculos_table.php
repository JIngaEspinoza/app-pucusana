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
            $table->id();
            $table->string('numero_licencia')->nullable();
            $table->string('numero_municipal')->nullable();
            $table->string('empresa')->nullable();
            $table->string('placa');
            $table->unsignedBigInteger('id_propietario');
            $table->foreign('id_propietario')->references('id')->on('entidades');
            $table->unsignedBigInteger('id_chofer');
            $table->foreign('id_chofer')->references('id')->on('entidades');

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
