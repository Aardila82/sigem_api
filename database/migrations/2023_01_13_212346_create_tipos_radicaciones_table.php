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
        if (!Schema::hasTable('tipos_radicaciones')) {
        Schema::create('tipos_radicaciones', function (Blueprint $table) {
            $table->comment('');
            $table->string('cod_tipo', 10)->primary();
            $table->string('descr_tipo', 64);
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
        Schema::dropIfExists('tipos_radicaciones');
    }
};
