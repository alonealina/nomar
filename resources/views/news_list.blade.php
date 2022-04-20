@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="title_div">
        <div class="title_en">News</div>
        <div class="title_ja">CLAB NOMARからのお知らせ</div>
    </div>
    <div class="news_div">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
        <img src="{{ asset('img/news.png') }}" class="news_img" alt="">
        <div class="news_text_short">ホームページ先行オープン</div>
    </div>
    <div class="news_div">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
        <img src="{{ asset('img/news.png') }}" class="news_img" alt="">
        <div class="news_text_short">ホームページ先行オープン</div>
    </div>
</div>


@endsection




@section('content_sp')

<div class="content_div_bg header_margin_sp">
    <div class="title_div">
        <div class="title_en">News</div>
        <div class="title_ja">CLUB NOMARからのお知らせ</div>
    </div>
    <div class="news_div_sp">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title_sp">ホームページ先行オープン</div>
        <img src="{{ asset('img/news.png') }}" class="news_img_sp" alt="">
        <div class="news_text_short_sp">ホームページ先行オープン</div>
    </div>
    <div class="news_div_sp">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
        <img src="{{ asset('img/news.png') }}" class="news_img_sp" alt="">
        <div class="news_text_short_sp">ホームページ先行オープン</div>
    </div>
</div>

@endsection