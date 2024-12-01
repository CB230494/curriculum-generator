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
        Schema::create('curricula', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Nombre completo
            $table->string('email'); // Correo electrónico
            $table->string('telefono'); // Teléfono
            $table->text('perfil_profesional'); // Perfil profesional
            $table->text('habilidades'); // Habilidades
            $table->text('experiencia_laboral'); // Experiencia laboral
            $table->text('educacion'); // Educación
            $table->timestamps(); // Campos created_at y updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
