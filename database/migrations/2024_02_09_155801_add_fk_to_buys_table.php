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
        // Schema::dropIfExists('buys');
        Schema::table('buys', function (Blueprint $table) {
            $table->bigInteger('cod_llamada')->unsigned()->after('id');
            $table->foreign('cod_llamada')->references('id')->on('calls')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('buys', function (Blueprint $table) {
            $table->dropForeign('cod_llamada');
            $table->dropColumn('cod_llamada');
        });
    }
};
