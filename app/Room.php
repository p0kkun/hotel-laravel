<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name', 'type', 'capacity_min', 'capacity_max', 'price','image_url', // 画像URLを追加
    ];

    // ここにモデルのリレーションやその他のメソッドを追加できます。
}

