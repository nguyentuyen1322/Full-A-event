<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeenmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seenmail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('ten_su_kien')->nullable();
            $table->text('email')->nullable();
            $table->text('ten_khach_hang')->nullable();
            $table->text('so_ve')->nullable();
            $table->text('cho_ngoi')->nullable();
            $table->text('dia_chi')->nullable();
            $table->text('mo_ta')->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seenmail');
    }
}
