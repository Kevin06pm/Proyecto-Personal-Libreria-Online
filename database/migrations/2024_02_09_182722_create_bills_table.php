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
        Schema::table('item_bills', function (Blueprint $table) {
            $table->bigInteger('num_factura')->unsigned()->after('id');
            $table->foreign('num_factura')->references('id')->on('calls')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('cod_producto')->unsigned()->after('num_factura');
            $table->foreign('cod_producto')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
