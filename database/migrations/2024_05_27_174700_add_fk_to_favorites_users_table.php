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
        Schema::table('favorites_users', function (Blueprint $table) {
            $table->bigInteger('idUsuario')->unsigned()->after('idFavoritos');
            $table->foreign('idUsuario')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
            $table->bigInteger('idLibro')->unsigned()->after('idUsuario');
            $table->foreign('idLibro')->references('idLibro')->on('books')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('favorites_users', function (Blueprint $table) {
            $table->dropForeign(['idUsuario']);
            $table->dropColumn('idUsuario');

            $table->dropForeign(['idLibro']);
            $table->dropColumn('idLibro');
        });
    }
};
