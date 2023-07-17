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
        if (!Schema::hasTable('resolucion_tarifas')) {
        Schema::create('resolucion_tarifas', function (Blueprint $table) {
            $table->comment('');
            $table->string('nro_resolucion', 32);
            $table->string('ano_resolucion', 32)->primary();
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
        Schema::dropIfExists('resolucion_tarifas');
    }
};
