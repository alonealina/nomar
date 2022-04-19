@extends('layouts.app')

@section('content')
<div class="top_content header_margin">
    <img src="{{ asset('img/top_first_view.jpg') }}" class="">
</div>

<div class="content_div_bg">
    <div class="title_div">
        <div class="title_en">About</div>
        <div class="top_about_explain">
            CLUB NOMARとは<br><br>
            本物のラグジュアリーと落ち着いた時間を追求した<br>
            大人の為の空間です。<br><br>
            美意識が高く、ご来店いただく紳士様達に<br>
            より一層楽しんで頂くために努力を惜しまない<br>
            一流の女性キャストが揃っております。<br><br>
            私どもはお客さまの満足を追求し一流の<br>
            おもてなしで、一流の皆様をお待ちしています。
        </div>
    </div>
    <div style="height:500px; display: flex; justify-content: space-between; width:650px; margin:auto;">
        <div style="width:315px; height:260px; background-color:gray;"></div>
        <div style="width:315px; height:260px; background-color:gray;"></div>
    </div>

    <div class="title_div">
        <div class="title_en">Cast List</div>
        <div class="title_ja">キャスト一覧</div>
        <div class="cast_list_ex">
            CLUB NOMARキャストのご紹介です。<br>
            ごく一部のご紹介になります。<br>
            ここではご紹介されていない一流の美女キャストが<br>
            皆様のご来店をお待ちしています。
        </div>
    </div>
    <div class="cast_list_div">
        <div class="cast_list_item">
            <a href="{{ route('cast_profile') }}">
                <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
                <div class="cast_list_name">AMANE<br>あまね</div>
            </a>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img">
            <div class="cast_list_name">AMANE<br>あまね</div>
        </div>
    </div>
    <div style="width:315px; height:260px; background-color:gray; margin: auto; margin-bottom:80px;"></div>

    <div class="title_div">
        <div class="title_en">News</div>
        <div class="title_ja">お知らせ</div>
    </div>
    <div class="top_news_div">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
    </div>
    <div class="top_news_div">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
    </div>
    <a href="{{ route('news_list') }}">
        <img src="{{ asset('img/news_list_btn.png') }}" class="news_list_btn">
    </a>

    <div class="top_secure" style="padding-top:80px;">【CLUB NOMAR安全対策】</div>

    <img src="{{ asset('img/top_border1.png') }}" class="news_list_btn">
    <div class="top_secure_orange">
        スタッフは新型コロナウイルスのワクチンを接種しています。<br>
        店内は常に換気を徹底しており、安心してお過ごしいただけます。
    </div>
    <img src="{{ asset('img/top_border2.png') }}" class="news_list_btn">
    <img src="{{ asset('img/detail_btn.png') }}" class="detail_btn padding_50">


</div>




<div class="content_div">

</div>

<div class="content_div_bg">

</div>

@endsection




@section('content_sp')



@endsection