<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->varchar('id_fb', 255)->nullable();
            $table->varchar('id_gg', 255)->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->integer('dien_thoai')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('ngay_sinh')->nullable();
            $table->boolean('gioi_tinh')->nullable();
            $table->string('hinh')->nullable();
            $table->boolean('vip')->nullable();
            $table->integer('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
