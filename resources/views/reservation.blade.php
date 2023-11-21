{{-- resources/views/reservation.blade.php --}}
@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h1 class="text-center mb-4">予約</h1>
    <form action="{{ route('reservation.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="checkin_date" class="form-label">チェックイン日</label>
                <input type="date" class="form-control" id="checkin_date" name="checkin_date" required>
            </div>
            <div class="col-md-6">
                <label for="checkout_date" class="form-label">チェックアウト日</label>
                <input type="date" class="form-control" id="checkout_date" name="checkout_date" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="guests" class="form-label">人数</label>
                <select id="guests" class="form-control" name="guests">
                    <option value="1">1人</option>
                    <option value="2">2人</option>
                    {{-- その他のオプション --}}
                </select>
            </div>
            <div class="col">
                <label for="room_type" class="form-label">部屋の種類</label>
                <select id="room_type" class="form-control" name="room_type">
                    <option value="single">シングル</option>
                    <option value="double">ダブル</option>
                    {{-- その他のオプション --}}
                </select>
            </div>
        </div>

        {{-- その他のフォーム要素 --}}

        <div class="text-center">
            <button type="submit" class="btn btn-primary">予約確定</button>
        </div>
    </form>
</div>

@endsection
