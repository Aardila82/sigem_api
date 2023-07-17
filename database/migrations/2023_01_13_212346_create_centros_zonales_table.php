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
        if (!Schema::hasTable('centros_zonales')) {
        Schema::create('centros_zonales', function (Blueprint $table) {
            $table->comment('');
            $table->integer('codigo')->primary();
            $table->string('descripcion', 512);
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
        Schema::dropIfExists('centros_zonales');
    }
};
