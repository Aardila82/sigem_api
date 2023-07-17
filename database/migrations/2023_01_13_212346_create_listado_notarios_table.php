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
        if (!Schema::hasTable('listado_notarios')) {
        Schema::create('listado_notarios', function (Blueprint $table) {
            $table->comment('');
            $table->integer('codigo', true);
            $table->string('descripcion', 1024);
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
        Schema::dropIfExists('listado_notarios');
    }
};
