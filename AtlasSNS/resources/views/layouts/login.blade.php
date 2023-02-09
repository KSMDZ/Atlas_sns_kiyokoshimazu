<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
</head>
<body>
    <header>
        <h1><a href="/top"><img src="images/atlas.png"></a></h1>

        <div id="accordion" class="accordion-container">
        <div class="ac-box"><h4 class="accordion-title js-accordion-title">〇〇さん</h4>
        <div class="ac-icon"><img src="images/icon1.png"></div></div>
        <div class="header-right-menu">
        <ul id="links">
            <li class="ac-tab"><a href="/top">HOME</a></li>
            <li class="ac-tab"><a href="/profile">プロフィール編集
            </a></li>
            <li class="ac-tab"><a href="/logout">ログアウト</a></li>
        </ul>
        </div>

    </header>

        <!-- <div id = "head">
                <div>
                <button type="button" class="menu-btn">
                    <span class="inn"></span>
                </button>
                <nav class="menu">
                <ul>
                    <li><a href="/top">HOME</a></li>
                    <li><a href="/profile">プロフィール</a></li>
                    <li><a href="/logout">ログアウト</a></li>
                </ul>
                </nav>
            </div>
        </div> -->





    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>〇〇さんの</p>
                <div>
                <p>フォロー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="/followList">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>〇〇名</p>
                </div>
                <p class="btn"><a href="/followerList">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a href="/search">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>
