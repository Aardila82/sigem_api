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
        if (!Schema::hasTable('general')) {
        Schema::create('general', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20)->primary();
            $table->integer('cod_minuta');
            $table->string('nro_escritura', 32)->default('0');
            $table->date('fec_escritura');
            $table->text('nro_hojas');
            $table->double('vlr_acto1')->default(0);
            $table->double('vlr_acto2')->default(0);
            $table->double('vlr_acto3')->default(0);
            $table->double('vlr_acto4')->default(0);
            $table->double('mayor_avaluo')->default(0);
            $table->decimal('por_clausula', 10)->default(0);
            $table->double('vlr_clausula')->default(0);
            $table->text('txt_clausula')->nullable();
            $table->string('nro_resolucion', 10);
            $table->integer('ano_resolucion');
            $table->double('vlr_derechos')->default(0);
            $table->double('vlr_retefuente')->default(0);
            $table->double('vlr_aportes')->default(0);
            $table->date('fecha_firma');
            $table->string('hora_firma', 10);
            $table->string('notaria_firma', 50);
            $table->string('ciudad_firma', 50);
            $table->string('notario_firma', 50);
            $table->text('txt_designacion')->nullable();
            $table->string('imp_consumo', 10);
            $table->string('imp_renta', 10);
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
        Schema::dropIfExists('general');
    }
};
