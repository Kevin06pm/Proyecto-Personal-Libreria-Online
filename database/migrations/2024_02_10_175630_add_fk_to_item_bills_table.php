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
        // Schema::dropIfExists('item_bills');
        Schema::table('item_bills', function (Blueprint $table) {
            //
            $table->bigInteger('numero_factura')->unsigned()->after('id');
            $table->foreign('numero_factura')->references('id')->on('bills')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('codigo_producto')->unsigned()->after('numero_factura');
            $table->foreign('codigo_producto')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('item_bills', function (Blueprint $table) {
            //
            $table->dropForeign('numero_factura');
            $table->dropColumn('numero_factura');
            $table->dropForeign('codigo_producto');
            $table->dropColumn('codigo_producto');
        });
    }
};
