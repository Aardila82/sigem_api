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
        if (!Schema::hasTable('var_minutas')) {
        Schema::create('var_minutas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_minuta');
            $table->integer('sec_var');
            $table->string('nom_var', 64)->nullable()->default(' ');
            $table->integer('tip_var')->nullable()->default(0);
            $table->integer('out_var')->nullable()->default(0);
            $table->integer('tabla_var')->nullable()->default(0);
            $table->integer('mod_var')->nullable()->default(0);
            $table->integer('contr_var')->nullable()->default(0);

            $table->primary(['cod_minuta', 'sec_var']);
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
        Schema::dropIfExists('var_minutas');
    }
};
