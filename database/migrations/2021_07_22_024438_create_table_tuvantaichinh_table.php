<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTuvantaichinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuvantaichinh', function (Blueprint $table) {
            $table->id();
            $table->string('tvtc_tendanhmuc')->nullable();
            $table->string('tvtc_gia')->nullable();
            $table->string('tvtc_soluong')->nullable();
            $table->string('tvtc_giam')->nullable();
            $table->string('tvtc_thanhtien')->nullable();
            $table->unsignedBigInteger('hosobenhnhan_id');
            $table->foreign('hosobenhnhan_id')->references('id')->on('hosobenhnhan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuvantaichinh');
    }
}
