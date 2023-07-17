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
        if (!Schema::hasTable('comprobantes490')) {
        Schema::create('comprobantes490', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20);
            $table->integer('cod_minuta');
            $table->integer('cod_comprobante');
            $table->string('tipo_comprobante', 64);
            $table->text('txt_comprobante');

            $table->primary(['rad_minuta', 'cod_minuta', 'cod_comprobante']);
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
        Schema::dropIfExists('comprobantes490');
    }
};
