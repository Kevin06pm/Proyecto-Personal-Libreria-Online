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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
            $table->integer('numero_documento')->unique();
            $table->integer('tipo_documento')->unique();
>>>>>>> gian
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('calle');
            $table->integer('numero_domicilio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
