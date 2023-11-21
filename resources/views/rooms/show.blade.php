{{-- resources/views/rooms/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <img src="{{ asset($room->image_url) }}" class="card-img-top" alt="{{ $room->name }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $room->name }}</h3>
                    <p class="card-text">{{ $room->type }} ({{ $room->capacity_min }}〜{{ $room->capacity_max }}人)</p>
                    <p class="card-text">1泊あたりの価格: ¥{{ number_format($room->price, 0) }}</p> <!-- 金額を追加 -->
                    {{-- チェックイン・チェックアウトの日付選択フィールドを含むフォーム --}}
                    <form action="{{ route('reservations.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="room_id" value="{{ $room->id }}">
                        {{-- ここにチェックイン・チェックアウト日などの入力フィールドを追加 --}}
                        <div class="form-group">
                            <label for="checkin_date">チェックイン:</label>
                            <input type="date" id="checkin_date" name="checkin_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="checkout_date">チェックアウト:</label>
                            <input type="date" id="checkout_date" name="checkout_date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">予約する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
