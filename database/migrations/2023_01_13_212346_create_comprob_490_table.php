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
        if (!Schema::hasTable('comprob_490')) {
        Schema::create('comprob_490', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_comprobante', true);
            $table->string('nom_comprobante', 128);
            $table->text('txt_comprobante');
            $table->string('estado', 32);
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
        Schema::dropIfExists('comprob_490');
    }
};
