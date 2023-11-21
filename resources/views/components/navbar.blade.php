{{-- resources/views/components/navbar.blade.php --}}

<nav class="navbar">
    <div class="container">
        <!-- ロゴはリンクでホームに戻るように設定するのが一般的です -->
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="/images/nonokalogo.png" alt="ロゴ">
        </a>
        <div class="custom-navbar-nav">
            <a href="{{ url('/about') }}" class="nav-item nav-link">概要</a>
            <a href="{{ url('/reservation') }}" class="nav-item nav-link">予約</a>
            <!-- 他のナビゲーションリンク -->
        </div>
        <!-- 右側のナビゲーションアイテム -->
        <div class="custom-navbar-nav navbar-right">
            <a href="{{ url('/contact') }}" class="nav-item nav-link">お問い合わせ</a>
            <!-- 他のナビゲーションリンク -->
        </div>
    </div>
</nav>
