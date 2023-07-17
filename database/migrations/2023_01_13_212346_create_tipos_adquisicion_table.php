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
        if (!Schema::hasTable('tipos_adquisicion')) {
        Schema::create('tipos_adquisicion', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tipo_adq')->primary();
            $table->string('descr_adq', 256);
            $table->integer('tipo_doc');
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
        Schema::dropIfExists('tipos_adquisicion');
    }
};
