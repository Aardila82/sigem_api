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
        if (!Schema::hasTable('municipios_old')) {
        Schema::create('municipios_old', function (Blueprint $table) {
            $table->comment('');
            $table->string('cod_mun', 10)->default('0')->primary();
            $table->bigInteger('coddep')->default(0);
            $table->string('nomdep', 50)->default('');
            $table->bigInteger('codmun')->default(0);
            $table->string('nom_mun', 50);
            $table->integer('activo')->default(0);
            $table->bigInteger('distrito');
            $table->string('tname', 40);
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
        Schema::dropIfExists('municipios_old');
    }
};
