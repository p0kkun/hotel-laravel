<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'room_id', 'user_id', 'check_in', 'check_out', 'total_price'
    ];

    // ルームモデルとのリレーション
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    // ユーザーモデルとのリレーション（ユーザーがログインしている場合）
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
