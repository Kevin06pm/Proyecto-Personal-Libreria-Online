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
        //  Schema::dropIfExists('operators');
        Schema::table('operators', function (Blueprint $table) {
            $table->unsignedBigInteger('id_coordinador')->nullable()->after('id'); //unsignedBigInteger:  es para que solo puedan ser positivos y no negativos
            $table->foreign('id_coordinador')->references('id')->on('operators')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('operators', function (Blueprint $table) {
            $table->dropForeign('id_coordinador');
            $table->dropColumn('id_coordinador');
            Schema::dropIfExists('operators');
        });
    }
};
