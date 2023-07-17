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
        if (!Schema::hasTable('ent_financieras')) {
        Schema::create('ent_financieras', function (Blueprint $table) {
            $table->comment('');
            $table->string('nom_entidad', 100);
            $table->string('nit_entidad', 20);
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
        Schema::dropIfExists('ent_financieras');
    }
};
