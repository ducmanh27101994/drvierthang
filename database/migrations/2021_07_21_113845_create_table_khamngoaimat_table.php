<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKhamngoaimatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khamngoaimat', function (Blueprint $table) {
            $table->id();
            //Khám ngoài mặt
            $table->string('knm_dangmat')->nullable();
            $table->string('knm_matnghieng')->nullable();
            $table->string('knm_duonggiuahamtren')->nullable();
            $table->string('knm_moi')->nullable();
            $table->string('knm_gocmuimoi')->nullable();
            $table->string('knm_cungcuoi')->nullable();
            $table->string('knm_duongcuoi')->nullable();
            $table->string('knm_hanhlangden')->nullable();
            $table->string('knm_ranhcam')->nullable();
            $table->string('knm_dolonuoukhicuoi')->nullable();
            $table->string('knm_dolorangcualucnghi')->nullable();
            $table->string('knm_cuongcomoi')->nullable();
            $table->string('knm_dohomoi')->nullable();
            $table->string('knm_tho')->nullable();
            $table->string('knm_canho')->nullable();
            $table->string('knm_cancheo')->nullable();
            $table->string('knm_dayluoi')->nullable();
            $table->string('knm_khac')->nullable();
            $table->string('knm_khamkhopduoiham')->nullable();
            $table->string('knm_clicking_phai')->nullable();
            $table->string('knm_clicking_trai')->nullable();
            $table->string('knm_lechkhiha')->nullable();
            $table->string('knm_dohatoida')->nullable();
            $table->string('knm_daudau')->nullable();
            $table->string('knm_taitrai')->nullable();
            $table->string('knm_taiphai')->nullable();
            $table->string('knm_ghichu')->nullable();

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
        Schema::dropIfExists('khamngoaimat');
    }
}
