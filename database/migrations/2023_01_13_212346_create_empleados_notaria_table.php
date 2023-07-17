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
        if (!Schema::hasTable('empleados_notaria')) {
        Schema::create('empleados_notaria', function (Blueprint $table) {
            $table->comment('');
            $table->integer('codigo', true);
            $table->string('descripcion');
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
        Schema::dropIfExists('empleados_notaria');
    }
};
