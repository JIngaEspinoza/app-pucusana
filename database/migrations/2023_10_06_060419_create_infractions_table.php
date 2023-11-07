<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('infractions', function (Blueprint $table) {
            $table->id();
            $table->string('cod');
            $table->double('monto', 18, 2);
            $table->string('monto_desc_50');
            $table->timestamps();
        });

        // Insertar los registros con los valores especificados
        for ($i = 1; $i <= 28; $i++) {
            DB::table('infractions')->insert([
                'cod' => 'IC-' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'monto' => 50.00,
                'monto_desc_50' => 25.00,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infractions');
    }
};
