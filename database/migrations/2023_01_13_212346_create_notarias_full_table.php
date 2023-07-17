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
        if (!Schema::hasTable('notarias_full')) {
        Schema::create('notarias_full', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_notaria')->primary();
            $table->string('notaria', 40);
            $table->string('nombre_notario', 100);
            $table->string('est_notario', 30);
            $table->string('email_notario', 100);
            $table->string('dir_notaria', 100);
            $table->string('tel_notaria', 100);
            $table->string('hor_notaria', 100);
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
        Schema::dropIfExists('notarias_full');
    }
};
