<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuatrinhdieutriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quatrinhdieutri', function (Blueprint $table) {
            $table->id();

            $table->string('ngay')->nullable();
            $table->string('bacsi')->nullable();
            $table->string('dieutrilantruoc')->nullable();
            $table->string('congviecdieutrilannay')->nullable();
            $table->string('congviecdukienlantoi')->nullable();
            $table->string('thanhtoan')->nullable();

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
        Schema::dropIfExists('quatrinhdieutri');
    }
}
