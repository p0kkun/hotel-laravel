<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUrlToRoomsTable extends Migration
{
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('capacity_max'); // image_urlカラムを追加
        });
    }

    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('image_url'); // ロールバックのためのカラム削除
        });
    }
}
