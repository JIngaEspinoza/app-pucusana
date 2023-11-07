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
            $table->foreign('id_offender')->references('id')->on('entidades');
            $table->string('direccion')->nullable();
            $table->string('placa');
            $table->unsignedBigInteger('id_infraction');
            $table->foreign('id_infraction')->references('id')->on('infractions');
            $table->text('nro_papeleta')->nullable();
            $table->text('img_papeleta')->nullable();
            $table->text('ord_liberacion_vehicular')->nullable();
            $table->text('img_liberacion_vehicular')->nullable();
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
