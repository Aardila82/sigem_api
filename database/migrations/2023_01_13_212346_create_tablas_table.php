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
        if (!Schema::hasTable('tablas')) {
        Schema::create('tablas', function (Blueprint $table) {
            $table->comment('');
            $table->increments('cod_tabla');
            $table->string('nom_tabla', 64);
            $table->string('descr_tabla', 256);
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
        Schema::dropIfExists('tablas');
    }
};
