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
        // Schema::dropIfExists('calls');
        Schema::table('calls', function (Blueprint $table) {
            //
            $table->bigInteger('num_doc_contacto')->unsigned()->after('codigo');
            $table->foreign('num_doc_contacto')->references('numero_documento')->on('contacts')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('operador_id')->unsigned()->after('codigo');
            $table->foreign('operador_id')->references('id')->on('operators')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calls', function (Blueprint $table) {
            //
            $table->dropForeign('num_doc_contacto');
            $table->dropColumn('num_doc_contacto');
            $table->dropForeign('operador_id');
            $table->dropColumn('operador_id');
        });
    }
};
