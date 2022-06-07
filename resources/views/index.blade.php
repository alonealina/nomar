@extends('layouts.app')

@section('content')
<div class="top_bg_div header_margin">品格ある紳士の為にCLUB NOMARはあります。</div>

<div class="content_div_bg" style="padding-top: 100px;">
    <div class="title_div">
        <div class="title_en">ABOUT</div>
        <div class="top_about_explain">
            CLUB NOMARのご紹介<br><br>
            日本有数の社交街である北新地に、大人の品格漂う皆様の為に<br>
            CLUB NOMARは誕生しました。<br><br>
            ラグジュアリーな本当の大人の空間で皆さまをお待ちしております。<br><br>
            美貌のみならず、おもてなしの心を持った当店のキャストが<br>
            紳士の皆様をお迎えします。<br><br>
            どうぞCLUB NOMARへお越しください。
        </div>
    </div>
    <div style="height:500px; display: flex; justify-content: space-between; width:650px; margin:auto;">
        <div style="width:320px; height:180px; background-color:gray;"></div>
        <div style="width:320px; height:180px; background-color:gray;"></div>
    </div>

    <div class="title_div">
        <div class="title_en">Instagram</div>
        <div class="insta_ex">
            CLUB NOMARの公式インスタグラムです。<br>
            在籍キャストのご紹介やイベントの最新情報などを<br>
            随時更新しています。<br>
            是非チェックしてください。<br>
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

    <div class="top_secure" style="padding-top:80px;">【CLUB NOMARコロナ対策】</div>

    <img src="{{ asset('img/top_border1.png') }}" class="news_list_btn">
    <div class="top_secure_orange">
        当店のスタッフ、キャストにはワクチン接種を厳守させ<br>
        店内の換気・衛生状況には十分な対応をしております。
    </div>
    <img src="{{ asset('img/top_border2.png') }}" class="news_list_btn">
    <div class="secure_div">
        関係する全スタッフがPCR検査を実施。<br><br>
        毎日の確認として<br>
        ・入店時の検温<br>
        ・殺菌スプレーの店内散布<br>
        ・手に触れる部分（ドアノブ等）の消毒<br>
        ・定期的な換気<br><br>
        お客様の安全の為、徹底した対応を行なっております。<br>
        是非ご安心いただき、CLUB NOMARでお寛ぎください。
    </div>
    <div class="more_view_btn">
        <img src="{{ asset('img/detail_open_btn.png') }}" class="detail_btn">
    </div>

</div>



<script>

</script>

@endsection




@section('content_sp')

<div class="content_div_bg_sp header_margin_sp">品格ある紳士の為に<br><br>CLUB NOMARはあります。</div>

<div class="content_div_bg" style="padding:20px 0;">
    <div class="title_div">
        <div class="title_en">ABOUT</div>
        <div class="title_ja">
            CLUB NOMARのご紹介<br><br>
            日本有数の社交街である北新地に、大人の品格漂う皆様の為に<br>
            CLUB NOMARは誕生しました。<br><br>
            ラグジュアリーな本当の大人の空間で皆さまをお待ちしております。<br><br>
            美貌のみならず、おもてなしの心を持った当店のキャストが<br>
            紳士の皆様をお迎えします。<br><br>
            どうぞCLUB NOMARへお越しください。
        </div>
    </div>
    <div style="width:315px; height:260px; background-color:gray; margin: auto;"></div>
</div>

<div class="content_div">
    <div class="title_div">
        <div class="title_en">Instagram</div>
        <div class="title_ja">
            CLUB NOMARの公式インスタグラムです。<br>
            在籍キャストのご紹介やイベントの最新情報などを<br>
            随時更新しています。<br>
            是非チェックしてください。<br>
        </div>
    </div>



</div>

<div class="content_div_bg" style="padding:20px 0;">
    <div class="title_div">
        <div class="title_en">News</div>
        <div class="title_ja">お知らせ</div>
    </div>
    <div class="top_news_div_sp">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
    </div>
    <div class="top_news_div_sp">
        <span class="news_genre">オフィシャル</span> <span class="news_date">(2021年12月2日配信)</span>
        <div class="news_title">ホームページ先行オープン</div>
    </div>
    <a href="{{ route('news_list') }}">
        <img src="{{ asset('img/news_list_btn.png') }}" class="news_list_btn">
    </a>

    <div class="top_secure_sp" style="padding-top:50px;">【CLUB NOMARコロナ対策】</div>

    <img src="{{ asset('img/top_border1_sp.png') }}" class="top_border_sp">
    <div class="top_secure_orange_sp">
        当店のスタッフ、キャストには<br>
        ワクチン接種を厳守させ<br>
        店内の換気・衛生状況には<br>
        十分な対応をしております。
    </div>
    <img src="{{ asset('img/top_border2_sp.png') }}" class="top_border_sp">
    <div class="secure_div_sp">
        関係する全スタッフがPCR検査を実施。<br><br>
        毎日の確認として<br>
        ・入店時の検温<br>
        ・殺菌スプレーの店内散布<br>
        ・手に触れる部分（ドアノブ等）の消毒<br>
        ・定期的な換気<br><br>
        お客様の安全の為、徹底した対応を行なっております。<br>
        是非ご安心いただき、CLUB NOMARでお寛ぎください。
    </div>
    <div class="more_view_btn_sp">
        <img src="{{ asset('img/detail_open_btn_sp.png') }}" class="detail_btn_sp">
    </div>



</div>


@endsection