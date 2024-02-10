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
<<<<<<< HEAD:database/migrations/2024_02_09_174019_add_fk_to_item_bills_table.php
        Schema::table('item_bills', function (Blueprint $table) {
            $table->bigInteger('num_factura')->unsigned()->after('id');
            $table->foreign('num_factura')->references('id')->on('calls')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('cod_producto')->unsigned()->after('num_factura');
            $table->foreign('cod_producto')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
=======
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_factura')->unique();
            $table->timestamps();
>>>>>>> d775a1be347e3210f7e498cb742837832c03fee3:database/migrations/2024_02_09_182722_create_bills_table.php
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
