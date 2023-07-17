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
        if (!Schema::hasTable('inmuebles')) {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20)->nullable();
            $table->integer('cod_minuta')->nullable();
            $table->integer('id_inmueble', true);
            $table->string('tipo_inmueble', 40);
            $table->string('ident_inmueble', 512);
            $table->string('dir_inmueble', 256);
            $table->string('ciu_inmueble', 128);
            $table->string('matr_inmueble', 30);
            $table->string('ced_inmueble', 64);
            $table->decimal('area_inmueble', 11)->default(0);
            $table->text('linesp_inmueble');
            $table->string('afect_viv_vend', 10);
            $table->text('afect_doc_vend');
            $table->string('afect_viv_comp', 10);
            $table->text('afect_doc_comp');
            $table->string('tipodoc_trad', 32);
            $table->string('tipo_adq');
            $table->string('nombre_adq', 1024);
            $table->string('nro_escritura', 10);
            $table->date('fec_escritura');
            $table->string('not_escritura', 30);
            $table->string('nom_juzgado', 1024);
            $table->string('ciu_notaria', 128);
            $table->string('ciu_registro', 128);
            $table->string('regimen_phoriz', 10);
            $table->string('empresa_phoriz');
            $table->string('nro_escr_phoriz', 10);
            $table->date('fec_escr_phoriz');
            $table->string('not_escr_phoriz', 30);
            $table->string('ciu_not_phoriz', 128);
            $table->text('lingen_inmueble');
            $table->decimal('coef_inmueble', 11)->default(0);
            $table->string('admin_docum', 10);
            $table->date('fec_protocoliz');
            $table->date('fec_expedicion');
            $table->double('vlr_inmueble')->default(0);
            $table->string('req_cancel', 10);
            $table->string('created_by', 32);
            $table->date('date_created');
            $table->string('modified_by', 32);
            $table->date('date_modified');
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
        Schema::dropIfExists('inmuebles');
    }
};
