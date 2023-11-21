{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('content')
<!-- resources/views/welcome.blade.php の中のヘッダー部分を更新 -->

<header>
    <div id="header-slider" class="header-slider">
        <div class="slider-item" style="background-image: url('/images/スクリーンショット 2023-11-08 142112.png');">
            <!-- 画像の説明文などがあればここに挿入 -->
        </div>
        <div class="slider-item" style="background-image: url('/images/スクリーンショット 2023-11-08 142000.png');">
            <!-- 画像の説明文などがあればここに挿入 -->
        </div>
        <div class="slider-item" style="background-image: url('/images/スクリーンショット 2023-11-08 142011.png');">
            <!-- 画像の説明文などがあればここに挿入 -->
        </div>
        <div class="slider-item" style="background-image: url('/images/スクリーンショット 2023-11-08 142021.png');">
            <!-- 画像の説明文などがあればここに挿入 -->
        </div>
        <div class="slider-item" style="background-image: url('/images/スクリーンショット 2023-11-08 142106.png');">
            <!-- 画像の説明文などがあればここに挿入 -->
        </div>
    </div>
</header>


@include('components.navbar')
<section id="search-bar">
    <div class="container">
        <form action="{{ route('search') }}" method="GET" class="search-form">
            <div class="form-row">
                <div class="col">
                    <label for="check-in">チェックイン日 - チェックアウト日</label>
                    <input type="text" class="form-control" id="check-in" name="check_in" placeholder="日付を選択">
                </div>
                <div class="col">
                    <label for="guests">大人2名様</label>
                    <select class="form-control" id="guests" name="adults">
                        <option>1人</option>
                        <option selected>2人</option>
                        <option>3人</option>
                        <option>4人</option>
                        <!-- その他のオプション -->
                    </select>
                </div>
                <div class="col">
                    <label for="children">子供の年齢</label>
                    <select class="form-control" id="children" name="children">
                        <option>1歳未満</option>
                        <option selected>1歳</option>
                        <option>2歳</option>
                        <!-- その他のオプション -->
                    </select>
                </div>
                <div class="col">
                    <label for="search">&nbsp;</label>
                    <button type="submit" class="btn btn-primary form-control">予約内容の確認・キャンセル</button>
                </div>
            </div>
        </form>
    </div>
</section>

<main>
    <section id="topix">
        <h2>Nonokaze TOPIX</h2>
        <!-- トピックスの内容 -->
    </section>

    <section id="gallery">
        <h2>Featured</h2>
        <!-- 施設やサービスのギャラリー -->
    </section>

    <!-- 他のセクション -->
</main>

<footer>
    <!-- フッターの情報 -->
</footer>
@endsection