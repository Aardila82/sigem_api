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
        if (!Schema::hasTable('listado_notarias')) {
        Schema::create('listado_notarias', function (Blueprint $table) {
            $table->comment('');
            $table->integer('codigo', true);
            $table->string('descripcion', 40);
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
        Schema::dropIfExists('listado_notarias');
    }
};
