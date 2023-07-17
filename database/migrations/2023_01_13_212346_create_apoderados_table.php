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
        if (!Schema::hasTable('apoderados')) {
            Schema::create('apoderados', function (Blueprint $table) {
                $table->comment('');
                $table->string('rad_minuta', 20);
                $table->integer('cod_minuta');
                $table->integer('suscr_id');
                $table->string('apod_tipo', 20);
                $table->string('apod_nombre', 50);
                $table->string('apod_tipodoc', 20);
                $table->string('apod_nrodoc', 20);
                $table->string('apod_ciudoc', 128);
                $table->string('nro_escritura', 10);
                $table->date('fec_escritura');
                $table->string('not_escritura', 30);
                $table->string('ciu_escritura', 30);
                $table->primary(['rad_minuta', 'cod_minuta', 'suscr_id']);
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
        Schema::dropIfExists('apoderados');
    }
};
