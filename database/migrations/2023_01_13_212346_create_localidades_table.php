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
        if (!Schema::hasTable('localidades')) {
        Schema::create('localidades', function (Blueprint $table) {
            $table->comment('');
            $table->string('cod_mun', 10);
            $table->string('cod_loc', 2);
            $table->string('nom_loc', 40);
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
        Schema::dropIfExists('localidades');
    }
};
