<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePhantichphimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phantichphim', function (Blueprint $table) {
            $table->id();

            $table->integer('number_1')->nullable();
            $table->integer('number_2')->nullable();
            $table->integer('number_3')->nullable();
            $table->integer('number_4')->nullable();
            $table->integer('number_5')->nullable();
            $table->integer('number_6')->nullable();
            $table->integer('number_7')->nullable();
            $table->integer('number_8')->nullable();
            $table->integer('number_9')->nullable();
            $table->integer('number_10')->nullable();
            $table->integer('number_11')->nullable();
            $table->integer('number_12')->nullable();
            $table->integer('number_13')->nullable();
            $table->integer('number_14')->nullable();
            $table->integer('number_15')->nullable();
            $table->integer('number_16')->nullable();
            $table->integer('number_17')->nullable();
            $table->integer('number_18')->nullable();
            $table->integer('number_19')->nullable();

            $table->string('ptp_theochieungang')->nullable();
            $table->string('ptp_huongtangtruong')->nullable();
            $table->string('ptp_hamtren')->nullable();
            $table->string('ptp_hamduoi')->nullable();
            $table->string('ptp_hang')->nullable();
            $table->string('ptp_donghiengrangcuaduoi')->nullable();
            $table->string('ptp_donhorangcuahamduoi')->nullable();
            $table->string('ptp_donghiengrangcuatren')->nullable();
            $table->string('ptp_donhorangcuahamtren')->nullable();

            $table->string('khac')->nullable();
            $table->string('xuongbantay')->nullable();
            $table->string('phantichphim')->nullable();
            $table->string('phantichmauham')->nullable();
            $table->string('vto')->nullable();
            $table->string('cantroxuong')->nullable();

            //
            $table->string('ptmh_bolton6_tren')->nullable();
            $table->string('ptmh_bolton12_tren')->nullable();
            $table->string('ptmh_bolton6_duoi')->nullable();
            $table->string('ptmh_bolton12_duoi')->nullable();
            $table->string('ptmh_chieunganghamduoi')->nullable();
            $table->string('ptmh_chieunganghamtren')->nullable();
            $table->string('ptmh_nongrong')->nullable();

            $table->string('check_new')->nullable();

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
        Schema::dropIfExists('phantichphim');
    }
}
