<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('comprobantes2')) {
        Schema::create('comprobantes2', function (Blueprint $table) {
            $table->comment('');
            $table->string('cod_mun', 10);
            $table->string('nom_mun', 128);
            $table->text('txt_comprobante');
            $table->string('estado', 32);
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobantes2');
    }
};
