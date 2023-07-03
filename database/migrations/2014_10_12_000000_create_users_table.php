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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('apellidos');
            $table->string('nombres');
            $table->unsignedBigInteger('dni');
            $table->unsignedInteger('edad');
            $table->date('cumple');
            $table->string('sexo');
            $table->unsignedBigInteger('celular');
            $table->string('direccion');
            $table->string('distrito');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rol');
            $table->string('cargo');
            $table->text('area');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
