<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->date('data_nascimento');
            $table->string('telefone')->nullable(); // Permite valores nulos
            $table->string('endereco')->nullable(); // Permite valores nulos
            $table->string('email')->unique()->nullable(); // Email único, permite nulos
            // Outros campos relevantes, como convênio, etc.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};