<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

// Route::get('/', function () {
//     return view('home');
// });
// routes/web.php
Route::get('/search', 'SearchController@index')->name('search');

// routes/web.php

use App\Http\Controllers\ReservationController;

// 予約フォームページ
Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation.create');

// 予約データの保存
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

// routes

Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::get('/rooms/details/{room}', 'RoomController@show')->name('rooms.show');
// routes/web.php

use App\Http\Controllers\RoomController;

// 部屋の一覧
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');

// 部屋の詳細
Route::get('/rooms/{id}', [RoomController::class, 'show'])->name('rooms.show');
