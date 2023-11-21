<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_details', function (Blueprint $table) {
            $table->bigIncrements('id'); // プライマリーキー
            $table->unsignedBigInteger('reservation_id'); // 予約IDの外部キー
            $table->unsignedBigInteger('room_id'); // 部屋IDの外部キー
            $table->date('check_in'); // チェックイン日
            $table->date('check_out'); // チェックアウト日
            $table->timestamps(); // 作成日と更新日

            // 外部キー制約
            $table->foreign('reservation_id')->references('id')->on('reservations')
                  ->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_details');
    }
}
