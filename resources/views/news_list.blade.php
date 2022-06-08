@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="title_div">
        <div class="title_en">News</div>
        <div class="title_ja">CLAB NOMARからのお知らせ</div>
    </div>
    @foreach ($news_list as $news)
    <div class="news_div">
        <span class="news_genre">{{ $news->name }}</span> <span class="news_date">({{ date("Y年m月d日" ,strtotime($news->notice_date)) }}配信)</span>
        <div class="news_title">{{ $news->title }}</div>
        @if($news->img)
        <img src="{{ asset('img/news/' . $news->img) }}" class="news_img" alt="">
        @else
        <img src="{{ asset('img/logo.png') }}" class="news_img" alt="">
        @endif
        <div class="news_text_short">{{ $news->content }}</div>
    </div>
    @endforeach
</div>


@endsection




@section('content_sp')

<div class="content_div_bg header_margin_sp">
    <div class="title_div">
        <div class="title_en">News</div>
        <div class="title_ja">CLUB NOMARからのお知らせ</div>
    </div>
    @foreach ($news_list as $news)
    <div class="news_div_sp">
        <span class="news_genre">{{ $news->name }}</span> <span class="news_date">({{ date("Y年m月d日" ,strtotime($news->notice_date)) }}配信)</span>
        <div class="news_title">{{ $news->title }}</div>
        @if($news->img)
        <img src="{{ asset('img/news/' . $news->img) }}" class="news_img_sp" alt="">
        @else
        <img src="{{ asset('img/logo.png') }}" class="news_img_sp" alt="">
        @endif
        <div class="news_text_short_sp">{{ $news->content }}</div>
    </div>
    @endforeach
</div>

@endsection