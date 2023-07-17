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
        if (!Schema::hasTable('ent_certif')) {
        Schema::create('ent_certif', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_entidad', true);
            $table->string('nom_entidad', 512);
            $table->integer('est_entidad');
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
        Schema::dropIfExists('ent_certif');
    }
};
