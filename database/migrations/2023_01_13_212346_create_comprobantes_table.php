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
        if (!Schema::hasTable('comprobantes')) {
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20);
            $table->integer('cod_minuta');
            $table->integer('id_inmueble');
            $table->integer('id_comprobante', true);
            $table->string('tipo_comprobante', 20);
            $table->string('p_nrodoc', 30);
            $table->string('dir_inmueble', 100);
            $table->string('ciu_inmueble', 50);
            $table->string('matr_inmobiliaria', 20);
            $table->string('ref_catastral', 20);
            $table->string('ced_catastral', 64);
            $table->string('p_contribuyente', 256);
            $table->double('p_autoavaluo')->nullable()->default(0);
            $table->double('p_totalpago')->nullable()->default(0);
            $table->date('p_fechapago');
            $table->string('v_nroconsulta', 20);
            $table->date('v_fechaexp')->nullable();
            $table->string('v_horaexp', 20);
            $table->string('i_pinseg', 20);
            $table->string('i_chip', 20);
            $table->date('i_fechaexp');
            $table->date('i_fechaven');
            $table->string('i_consecutivo', 30);
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
        Schema::dropIfExists('comprobantes');
    }
};
