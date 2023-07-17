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
        if (!Schema::hasTable('motivos_afect')) {
        Schema::create('motivos_afect', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_motivo', true);
            $table->string('motivo_afect', 256);
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
        Schema::dropIfExists('motivos_afect');
    }
};
