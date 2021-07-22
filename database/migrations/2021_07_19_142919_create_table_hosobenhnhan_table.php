<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHosobenhnhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosobenhnhan', function (Blueprint $table) {
            $table->id();
            //Hành chính
            $table->date('date_start')->nullable();
            $table->string('customer_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('area')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('bacsi')->nullable();
            $table->string('gioi_tinh')->nullable();
            $table->string('quan')->nullable();
            $table->string('quoc_gia')->nullable();
            $table->string('so_dien_thoai_ban')->nullable();
            $table->string('dan_toc')->nullable();
            $table->string('tieu_su_y_khoa')->nullable();
            $table->string('tieu_su_nha_khoa')->nullable();
            $table->string('ly_do_den_kham')->nullable();
            $table->string('thuoc_dang_su_dung')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();

            //Khám trong miệng
            $table->string('ktm_hang')->nullable();
            $table->string('ktm_chi')->nullable();
            $table->string('ktm_rangcoi_trai')->nullable();
            $table->string('ktm_rangcoi_phai')->nullable();
            $table->string('ktm_rangnanh_trai')->nullable();
            $table->string('ktm_rangnanh_phai')->nullable();
            $table->string('ktm_lenhchucnang')->nullable();
            $table->string('ktm_hamtren_phai')->nullable();
            $table->string('ktm_hamtren_trai')->nullable();
            $table->string('ktm_hamduoi_phai')->nullable();
            $table->string('ktm_hamduoi_trai')->nullable();
            $table->string('ktm_khoanghamtren')->nullable();
            $table->string('ktm_khoanghamduoi')->nullable();
            $table->string('ktm_canphu')->nullable();
            $table->string('ktm_canphu_number')->nullable();
            $table->string('ktm_canphu_chia')->nullable();
            $table->string('ktm_nuourangnanhhd')->nullable();
            $table->string('ktm_duongcongSpee')->nullable();
            $table->string('ktm_cungrang')->nullable();
            $table->string('ktm_giaidoanrang')->nullable();
            $table->string('ktm_nuouvunggRCduoi')->nullable();

            //Tư vấn tài chính
            $table->string('tvtc_mongmuondieutri')->nullable();
            $table->string('tvtc_thoigiantoida')->nullable();
            $table->string('tvtc_chiphidutru')->nullable();
            $table->string('tvtc_ghichu')->nullable();
            $table->string('tvtc_solanthanhtoan')->nullable();
            $table->string('tvtc_cacdotthanhtoann')->nullable();

            //Kế hoạch điều trị
            $table->longText('kehoachdieutri')->nullable();
            $table->string('khdt_vandequantamchinh')->nullable();
            $table->string('khdt_vandedieutri')->nullable();
            $table->string('khdt_ghichu')->nullable();
            $table->string('khdt_chuandoan')->nullable();
            $table->string('khdt_muctieudieutri')->nullable();
            $table->string('khdt_gioihandieutri')->nullable();

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
        Schema::dropIfExists('hosobenhnhan');
    }
}
