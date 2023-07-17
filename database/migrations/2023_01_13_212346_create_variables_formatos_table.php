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
        if (!Schema::hasTable('variables_formatos')) {
        Schema::create('variables_formatos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tipo_variable');
            $table->integer('tipo_formato');
            $table->string('descr_formato', 128);
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
        Schema::dropIfExists('variables_formatos');
    }
};
