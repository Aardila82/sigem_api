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
        if (!Schema::hasTable('ent_financieras_all')) {
        Schema::create('ent_financieras_all', function (Blueprint $table) {
            $table->comment('');
            $table->string('nom_entidad')->nullable();
            $table->string('nit_entidad', 20)->nullable();
            $table->string('nombre', 100);
            $table->string('cargo', 50);
            $table->string('dir_entidad', 100);
            $table->string('ciu_entidad', 100);
            $table->string('tel_entidad', 20);
            $table->string('fax_entidad', 20);
            $table->string('email_entidad', 100);
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
        Schema::dropIfExists('ent_financieras_all');
    }
};
