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
        if (!Schema::hasTable('clausulas_penales')) {
        Schema::create('clausulas_penales', function (Blueprint $table) {
            $table->comment('');
            $table->integer('codigo');
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
        Schema::dropIfExists('clausulas_penales');
    }
};
