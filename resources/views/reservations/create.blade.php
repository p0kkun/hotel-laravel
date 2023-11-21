{{-- resources/views/reservations/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($rooms as $room)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-3"> <!-- ここでレスポンシブなクラスを追加 -->
                <div class="card h-100"> <!-- Bootstrap 4の場合、カードの高さを揃えるための h-100 クラスを使用 -->
                    <img src="{{ asset($room->image_url) }}" class="card-img-top" alt="{{ $room->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->name }}</h5>
                        <p class="card-text">{{ $room->type }} ({{ $room->capacity_min }}〜{{ $room->capacity_max }}人)</p>
                        <button onclick="location.href='{{ url('rooms/details', $room->id) }}'" type="submit" name="room_id" value="{{ $room->id }}" class="btn btn-primary">この部屋を予約</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
