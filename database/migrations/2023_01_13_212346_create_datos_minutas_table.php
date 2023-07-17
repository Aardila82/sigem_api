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
        if (!Schema::hasTable('datos_minutas')) {
        Schema::create('datos_minutas', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20);
            $table->integer('cod_minuta');
            $table->integer('secuencia_var');
            $table->string('contenido_var', 4096)->nullable();

            $table->primary(['rad_minuta', 'cod_minuta', 'secuencia_var']);
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
        Schema::dropIfExists('datos_minutas');
    }
};
