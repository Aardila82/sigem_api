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
        if (!Schema::hasTable('perfiles')) {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->comment('');
            $table->smallInteger('idprofile', true)->index('idprofile');
            $table->string('profile', 40);

            $table->primary(['idprofile']);
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
        Schema::dropIfExists('perfiles');
    }
};
