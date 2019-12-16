<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ten_su_kien');
            $table->varchar('nha_tai_tro', 255);
            $table->varchar('logo', 255);
            $table->integer('id_loai');
            $table->string('banner');
            $table->Datetime('ngay_dien_ra');
            $table->Datetime('thoi_gian');
            $table->varchar('vi_tri_ve_thuong', 255);
            $table->Float('gia_ve');
            $table->varchar('qua_tang_thuong', 255);
            $table->varchar('vi_tri_ve_vip', 255);
            $table->Float('gia_ve_vip');
            $table->varchar('qua_tang_vip', 255);
            $table->string('dia_chi');
            $table->Datetime('ngay_ban');
            $table->text('tom_tat');
            $table->text('mo_ta');
            $table->integer('so_luong_ve_thuong', 11);
            $table->integer('so_luong_ve_vip', 11);
            $table->tinyInteger('hien_thi_slider', 1);
            $table->tinyInteger('hien_thi_noi_bat', 1);
            $table->tinyInteger('duyet', 1);
            $table->text('email_chu');
            $table->varchar('id_user', 10);
            $table->Datetime('ngay_ket_thuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
