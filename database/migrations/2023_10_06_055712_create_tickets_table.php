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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_offender');
            $table->foreign('id_offender')->references('id')->on('offenders');
            $table->string('direccion')->nullable();
            $table->string('placa');
            $table->string('infraccion');
            $table->string('nro_papeleta');
            $table->string('imagen_papeleta')->nullable();
            $table->string('orden_vehicular');
            $table->string('orden_vehicular')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
