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
        Schema::table('buys', function (Blueprint $table) {
            $table->unsignedBigInteger('idLibro')->after('idCompra');
            $table->foreign('idLibro')->references('idLibro')->on('books')->onDelete('cascade')->onUpdate('cascade');
        
            $table->unsignedBigInteger('idUsuario')->after('idLibro');
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buys', function (Blueprint $table) {
            $table->dropForeign(['idLibro']);
            $table->dropColumn('idLibro');

            $table->dropForeign(['idUsuario']);
            $table->dropColumn('idUsuario');
        });
    }
};
