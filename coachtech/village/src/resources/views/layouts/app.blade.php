<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VillageHome</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
@yield('css')
<body>
    <header class="header">
        <h1 class="header__title">村長の里</h1>
        <nav class="header__nav">
            <ul class="header__nav-list">
                <li><a href="/">ホーム</a></li>
                <li><a href="/about">私たちについて</a></li>
                <li><a href="/activity">活動</a></li>
                <li><a href="/information">情報</a></li>
                <li><a href="/contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
@yield('content')
</body>

@yield('footer')
    <footer class="footer">
        <div class="footer__inner">
            <p>電話: 123-456-7890</p>
            <p>メール: info@village.com</p>
            <p>住所:　〒979-1302　福島県双葉郡大熊町大字小入野西大和久420-1メゾンウエストE</p>
            <p>&copy; 2025 村長の里. All rights reserved.</p>
        </div>
    </footer>
</html>