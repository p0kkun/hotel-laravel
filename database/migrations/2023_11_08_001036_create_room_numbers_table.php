<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_numbers', function (Blueprint $table) {
            $table->bigIncrements('id'); // 自動インクリメントID
            $table->unsignedBigInteger('room_id'); // `rooms` テーブルのIDへの参照
            $table->string('number')->unique(); // 部屋番号、一意でなければならない
            $table->timestamps();

            // 外部キー制約
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
        Schema::dropIfExists('room_numbers');
    }
}
