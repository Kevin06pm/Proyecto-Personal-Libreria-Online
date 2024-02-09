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
        // Schema::dropIfExists('comments');
        Schema::table('comments', function (Blueprint $table) {
            $table->bigInteger('cod_llamada')->unsigned()->after('id');
            $table->foreign('cod_llamada')->references('id')->on('calls')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('num_reclamo')->unsigned()->after('cod_llamada');
            $table->foreign('num_reclamo')->references('id')->on('claims')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            //
            $table->dropForeign('cod_llamada');
            $table->dropColumn('cod_llamada');
            $table->dropForeign('num_reclamo');
            $table->dropColumn('num_reclamo');
        });
    }
};
