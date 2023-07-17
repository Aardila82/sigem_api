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
        if (!Schema::hasTable('var_modulos')) {
        Schema::create('var_modulos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_modulo')->primary();
            $table->string('nom_modulo', 32);
            $table->string('var_modulo', 64);
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
        Schema::dropIfExists('var_modulos');
    }
};
