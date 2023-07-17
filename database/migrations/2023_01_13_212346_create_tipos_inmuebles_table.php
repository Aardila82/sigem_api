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
        if (!Schema::hasTable('tipos_inmuebles')) {
        Schema::create('tipos_inmuebles', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tipo_inmueble', true);
            $table->string('descr_inmueble', 50);
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
        Schema::dropIfExists('tipos_inmuebles');
    }
};
