<?php

// app/Http/Controllers/ReservationController.php

namespace App\Http\Controllers;
use App\Room;
use App\Reservation;
use Carbon\Carbon;


use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // 予約ページを表示
    public function create()
    {
        // すべての部屋の情報を取得
        $rooms = Room::all();

        // ビューに部屋の情報を渡す
        return view('reservations.create', compact('rooms'));
    }

    // 予約データを処理
    public function store(Request $request)
{
    $validatedData = $request->validate([
        // バリデーションルール...
        'checkin_date' => 'required|date|after_or_equal:today',
        'checkout_date' => 'required|date|after:checkin_date',
        'room_id' => 'required|exists:rooms,id',
    ]);

    $room = Room::findOrFail($validatedData['room_id']);
    $checkin = Carbon::parse($validatedData['checkin_date']);
    $checkout = Carbon::parse($validatedData['checkout_date']);
    $nights = $checkout->diffInDays($checkin);
    $totalPrice = $nights * $room->price;

    // 予約データを保存
    $reservation = new Reservation();
    // ...
    $reservation->total_price = $totalPrice;
    // ...
    $reservation->save();

    return back()->with('success', '予約が完了しました。');
}
    
}
