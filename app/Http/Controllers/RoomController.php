<?php

namespace App\Http\Controllers;

use App\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function show($roomId)
    {
        $room = Room::findOrFail($roomId);
        // 部屋の詳細データとともに詳細ページを表示
        return view('rooms.show', compact('room'));
    }
}
