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
        if (!Schema::hasTable('tipos_suscritos')) {
        Schema::create('tipos_suscritos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tipo_suscrito', true);
            $table->string('descr_suscrito', 32);
            $table->string('singular_h');
            $table->string('singular_m');
            $table->string('plural_h');
            $table->string('plural_m');
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
        Schema::dropIfExists('tipos_suscritos');
    }
};
