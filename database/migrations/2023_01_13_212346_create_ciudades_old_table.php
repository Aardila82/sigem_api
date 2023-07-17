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
        if (!Schema::hasTable('ciudades_old')) {
        Schema::create('ciudades_old', function (Blueprint $table) {
            $table->comment('');
            $table->integer('codigo', true);
            $table->string('descripcion', 80)->nullable();
            $table->integer('idDepartamento')->index('idDepartamento');
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
        Schema::dropIfExists('ciudades_old');
    }
};
