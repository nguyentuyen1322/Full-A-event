<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_event');
            $table->string('ten_nguoi_mua',255)->nullable();
            $table->integer('phone')->nullable();
            $table->string('email',255);
            $table->integer('sl_ve_thuong', 10);
            $table->float('tong_tien_ve_thuong');
            $table->integer('sl_ve_vip', 11);
            $table->float('tong_tien_ve_vip');
            $table->double('tong_tien');
            $table->integer('id_user', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
