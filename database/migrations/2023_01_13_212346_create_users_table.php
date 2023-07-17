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
        if (!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_user', true);
            $table->string('name', 40);
            $table->bigInteger('cedula');
            $table->string('email', 128);
            $table->string('telefono', 32);
            $table->string('username', 20);
            $table->string('password', 64);
            $table->string('profile', 20);
            $table->string('status', 64)->default('');
            $table->string('access_type', 32);
            $table->string('user_type', 32);
            $table->string('created_by', 32);
            $table->date('date_created');
            $table->string('modified_by', 32);
            $table->date('date_modified');
            $table->date('prueba_columna', 32);
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
        Schema::dropIfExists('users');
    }
};
