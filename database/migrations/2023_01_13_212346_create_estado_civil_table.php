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
        if (!Schema::hasTable('estado_civil')) {
        Schema::create('estado_civil', function (Blueprint $table) {
            $table->comment('');
            $table->integer('codigo')->primary();
            $table->string('sexo', 32);
            $table->string('descripcion', 256);
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
        Schema::dropIfExists('estado_civil');
    }
};
