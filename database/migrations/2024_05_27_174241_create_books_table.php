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
        Schema::create('books', function (Blueprint $table) {
            $table->id('idLibro');
            $table->string('imagenPortada'); // nueva columna para la imagen de portada
            $table->string('codigoLibro'); // nueva columna para el código del libro
            $table->decimal('valoracion', 3, 2); // nueva columna para la valoración
            $table->decimal('precio', 8, 2); // nueva columna para el precio
            $table->string('titulo');
            $table->string('autor');
            $table->string('genero');
            $table->integer('añoPublicacion');
            $table->integer('numeroPaginas');
            $table->text('sinopsis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
