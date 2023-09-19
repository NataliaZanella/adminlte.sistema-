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
        Schema::create('dotacaos', function (Blueprint $table) {
            $table->id();
            $table->decimal('Valor_total', 9, 2);
            $table->string('Nome');
            $table->string('Tipo');
            $table->string('Subcategoria');
            $table->date('Ano');
            $table->date('Data_inicio');
            $table->string('Empresa_prestadora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dotacaos');
    }
};
