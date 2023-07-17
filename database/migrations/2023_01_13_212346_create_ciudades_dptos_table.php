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
        if (!Schema::hasTable('ciudades_dptos')) {
        Schema::create('ciudades_dptos', function (Blueprint $table) {
            $table->comment('');
            $table->string('codigo', 10)->default('0')->primary();
            $table->string('descripcion', 128);
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
        Schema::dropIfExists('ciudades_dptos');
    }
};
