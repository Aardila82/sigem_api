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
        
        if (!Schema::hasTable('texto_minutas')) {
        Schema::create('texto_minutas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_minuta')->primary();
            $table->string('titulo_minuta', 1024);
            $table->integer('nro_variables');
            $table->text('texto_minuta');
            $table->string('tipo_rad', 10);
            $table->string('created_by', 32);
            $table->date('date_created');
            $table->string('modified_by', 32);
            $table->date('date_modified');
            $table->integer('estado_minuta')->default(0);
            $table->string('permissions', 1024);
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
        Schema::dropIfExists('texto_minutas');
    }
};
