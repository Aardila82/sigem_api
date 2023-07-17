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
        if (!Schema::hasTable('reformas_ph')) {
        Schema::create('reformas_ph', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20);
            $table->integer('cod_minuta');
            $table->integer('id_inmueble');
            $table->integer('id_reforma', true);
            $table->string('tipo_reforma', 32);
            $table->string('nro_escritura', 10);
            $table->date('fec_escritura');
            $table->string('not_escritura', 32);
            $table->string('ciu_notaria', 64);
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
        Schema::dropIfExists('reformas_ph');
    }
};
