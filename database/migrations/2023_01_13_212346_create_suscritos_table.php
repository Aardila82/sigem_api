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
        if (!Schema::hasTable('suscritos')) {
        Schema::create('suscritos', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20);
            $table->integer('cod_minuta');
            $table->bigInteger('suscr_id', true);
            $table->integer('suscr_tipo');
            $table->string('suscr_pers', 20);
            $table->string('suscr_razon');
            $table->string('suscr_nit', 12);
            $table->string('suscr_direccion', 256);
            $table->string('suscr_domicilio', 64);
            $table->string('suscr_nombre', 64);
            $table->string('suscr_tipodoc', 10);
            $table->string('suscr_nrodoc', 32);
            $table->string('suscr_ciudoc', 64);
            $table->string('suscr_sexo', 32);
            $table->string('suscr_estcivil', 128);
            $table->string('suscr_nac', 32);
            $table->string('suscr_nrocel', 32);
            $table->string('suscr_email', 128);
            $table->string('suscr_ocupacion', 128);
            $table->string('created_by', 32);
            $table->date('date_created');
            $table->string('modified_by', 32);
            $table->date('date_modified');

            $table->primary(['rad_minuta', 'suscr_id']);
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
        Schema::dropIfExists('suscritos');
    }
};
