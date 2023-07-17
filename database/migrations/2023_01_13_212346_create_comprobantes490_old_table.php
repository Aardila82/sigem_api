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
        if (!Schema::hasTable('comprobantes490_old')) {
        Schema::create('comprobantes490_old', function (Blueprint $table) {
            $table->comment('');
            $table->integer('rad_minuta');
            $table->integer('cod_minuta');
            $table->integer('id_comprobante', true);
            $table->string('tipo_comprobante', 64);
            $table->string('nro_formulario', 30);
            $table->string('nombre_razon', 100);
            $table->string('cedula_nit', 32);
            $table->double('vlr_consignado')->nullable()->default(0);
            $table->date('fecha_pago');
            $table->text('txt_comprobante');
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
        Schema::dropIfExists('comprobantes490_old');
    }
};
