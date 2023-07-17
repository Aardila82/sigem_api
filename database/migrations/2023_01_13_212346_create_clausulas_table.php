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
        if (!Schema::hasTable('clausulas')) {
        Schema::create('clausulas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('rad_minuta');
            $table->integer('cod_minuta');
            $table->integer('id_clausula', true);
            $table->string('tit_clausula');
            $table->text('txt_clausula');
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
        Schema::dropIfExists('clausulas');
    }
};
