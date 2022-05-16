<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>NOMAR</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/jpg" href="{{ asset('img/favicon.jpg') }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    </head>

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <header class="header_pc">
                <div class="header_menu">
                    <a class="logo_a" href="/">
                        <img src="{{ asset('img/logo.png') }}" class="header_logo" alt="">
                    </a>
                    <a href="{{ route('about') }}" class="header_a" style="width: 145px;">
                        <p class="header_en">About</p>
                        <p class="header_ja">CLUB NOMARとは</p>
                    </a>
                    <a href="{{ route('floor') }}" class="header_a" style="width: 145px;">
                        <p class="header_en">Floor/Price</p>
                        <p class="header_ja">フロア/料金案内</p>
                    </a>
                    <a href="{{ route('news_list') }}" class="header_a" style="width: 105px;">
                        <p class="header_en">News</p>
                        <p class="header_ja">お知らせ</p>
                    </a>
                    <a href="{{ route('access') }}" class="header_a">
                        <p class="header_en">Access</p>
                        <p class="header_ja">アクセス</p>
                    </a>
                    <a href="{{ route('recruit') }}" class="header_a">
                        <p class="header_en">Recruit</p>
                        <p class="header_ja">求人情報</p>
                    </a>
                </div>
            </header>

            @yield('content')

            <footer>
                <a href="/"><img src="{{ asset('img/logo.png') }}" class="footer_logo" alt=""></a>
                <div class="footer_nomar">CLUB NOMAR KITASHINCHI</div>
                <div class="footer_menu">
                    <a href="{{ route('about') }}" class="footer_a">
                        <p class="header_en">About</p>
                        <p class="header_ja">CLUB NOMARとは</p>
                    </a>
                    <a href="{{ route('floor') }}" class="footer_a">
                        <p class="header_en">Floor/Price</p>
                        <p class="header_ja">フロア/料金案内</p>
                    </a>
                    <a href="{{ route('news_list') }}" class="footer_a">
                        <p class="header_en">News</p>
                        <p class="header_ja">お知らせ</p>
                    </a>
                </div>
                <div class="footer_menu">
                    <a href="{{ route('access') }}" class="footer_a">
                        <p class="header_en">Access</p>
                        <p class="header_ja">アクセス</p>
                    </a>
                    <a href="{{ route('recruit') }}" class="footer_a">
                        <p class="header_en">Recruit</p>
                        <p class="header_ja">求人情報</p>
                    </a>
                    <div class="footer_a">
                    </div>
                </div>
            </footer>
        </body>
    </div>

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>
            <header class="header_sp">
                <a class="logo_a_sp" href="/">
                    <img src="{{ asset('img/logo.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <ul>
                            <li>
                                <a href ="{{ route('about') }}" class="menu_content_sp @if (strpos($now_route,'search') !== false) current @endif">
                                    <span class="sp_menu_en">About</span><br>
                                    <span class="sp_menu_ja">CLUB NOMARとは</span>
                                    <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                                </a>
                            </li>
                            <li>
                                <a href ="{{ route('floor') }}" class="menu_content_sp @if (strpos($now_route,'event') !== false) current @endif">
                                    <span class="sp_menu_en">Floor/Price</span><br>
                                    <span class="sp_menu_ja">フロア/料金案内</span>
                                    <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                                </a>
                            </li>
                            <li>
                                <a href ="{{ route('news_list') }}" class="menu_content_sp @if (strpos($now_route,'practice') !== false) current @endif">
                                    <span class="sp_menu_en">News</span><br>
                                    <span class="sp_menu_ja">お知らせ</span>
                                    <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                                </a>
                            </li>
                            <li>
                                <a href ="{{ route('access') }}" class="menu_content_sp @if (strpos($now_route,'news') !== false) current @endif">
                                    <span class="sp_menu_en">Access</span><br>
                                    <span class="sp_menu_ja">アクセス</span>
                                    <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                                </a>
                            </li>
                            <li>
                                <a href ="{{ route('recruit') }}" class="menu_content_sp @if (strpos($now_route,'recruit') !== false) current @endif">
                                    <span class="sp_menu_en">Recruit</span><br>
                                    <span class="sp_menu_ja">求人</span>
                                    <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            @yield('content_sp')

            <footer class="footer_sp">
                <a href="/"><img src="{{ asset('img/logo.png') }}" class="footer_logo_sp" alt=""></a>
                <div class="footer_menu_sp">
                    <ul>
                        <li>
                            <a href ="{{ route('about') }}" class="menu_content_sp @if (strpos($now_route,'search') !== false) current @endif">
                                <span class="sp_menu_en">About</span><br>
                                <span class="sp_menu_ja">CLUB NOMARとは</span>
                                <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                            </a>
                        </li>
                        <li>
                            <a href ="{{ route('floor') }}" class="menu_content_sp @if (strpos($now_route,'event') !== false) current @endif">
                                <span class="sp_menu_en">Floor/Price</span><br>
                                <span class="sp_menu_ja">フロア/料金案内</span>
                                <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                            </a>
                        </li>
                        <li>
                            <a href ="{{ route('news_list') }}" class="menu_content_sp @if (strpos($now_route,'practice') !== false) current @endif">
                                <span class="sp_menu_en">News</span><br>
                                <span class="sp_menu_ja">お知らせ</span>
                                <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                            </a>
                        </li>
                        <li>
                            <a href ="{{ route('access') }}" class="menu_content_sp @if (strpos($now_route,'news') !== false) current @endif">
                                <span class="sp_menu_en">Access</span><br>
                                <span class="sp_menu_ja">アクセス</span>
                                <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                            </a>
                        </li>
                        <li>
                            <a href ="{{ route('recruit') }}" class="menu_content_sp @if (strpos($now_route,'recruit') !== false) current @endif">
                                <span class="sp_menu_en">Recruit</span><br>
                                <span class="sp_menu_ja">求人</span>
                                <img src="{{ asset('img/yazi.png') }}" class="yazi" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </body>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>

</html>