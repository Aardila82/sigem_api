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
        if (!Schema::hasTable('config')) {
        Schema::create('config', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ano_resolucion')->primary();
            $table->integer('nro_resolucion');
            $table->string('texto_email', 1024);
            $table->string('aviso_legal', 1024);
            $table->string('created_by', 64);
            $table->date('date_created');
            $table->string('modified_by', 64);
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
        Schema::dropIfExists('config');
    }
};
