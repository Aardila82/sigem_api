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
        if (!Schema::hasTable('radicacion_minutas')) {
        Schema::create('radicacion_minutas', function (Blueprint $table) {
            $table->comment('');
            $table->string('rad_minuta', 20)->primary();
            $table->bigInteger('cod_minuta');
            $table->string('creator_name', 50);
            $table->string('creator_email', 50);
            $table->string('creator_phone', 32);
            $table->string('created_by', 32);
            $table->date('date_created');
            $table->string('modified_by', 32);
            $table->date('date_modified');
            $table->integer('status');
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
        Schema::dropIfExists('radicacion_minutas');
    }
};
