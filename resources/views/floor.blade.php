@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="title_div">
        <div class="title_en">Floor/Price</div>
        <div class="title_ja">CLAB NOMARのフロア・料金案内</div>
    </div>
</div>

<div class="content_div">
    <div class="title_floor">Floor</div>
</div>

<div class="content_div_floor">
    <div class="floor_flex">
        <img src="{{ asset('img/floor1.jpg') }}" class="floor_img">
        <div class="floor_text">
            <div class="floor_text_main">ENTRANCE</div>
            <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
        </div>
    </div>
</div>

<div class="content_div_bg">
    <div class="floor_flex">
        <img src="{{ asset('img/floor2.jpg') }}" class="floor_img">
        <div class="floor_text">
            <div class="floor_text_main">ENTRANCE</div>
            <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
        </div>
    </div>
</div>

<div class="content_div_floor">
    <div class="floor_flex">
        <img src="{{ asset('img/floor3.jpg') }}" class="floor_img">
        <div class="floor_text">
            <div class="floor_text_main">ENTRANCE</div>
            <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
        </div>
    </div>
</div>

<div class="content_div_bg">
    <div class="floor_flex">
        <img src="{{ asset('img/floor4.jpg') }}" class="floor_img">
        <div class="floor_text">
            <div class="floor_text_main">ENTRANCE</div>
            <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
        </div>
    </div>
</div>

<div class="content_div_floor">
    <div class="floor_flex">
        <img src="{{ asset('img/floor5.jpg') }}" class="floor_img">
        <div class="floor_text">
            <div class="floor_text_main">ENTRANCE</div>
            <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
        </div>
    </div>
</div>

<div class="content_div_bg">
    <div class="title_div">
        <div class="title_en">Price</div>
    </div>
    <table class="price_table">
        <tr><th>メンバーお1人様60分</th><th>基本料金</th></tr>
        <tr><td>SET料金</td><td>￥9,000</td></tr>
        <tr><td>指名料金</td><td>￥3,000</td></tr>
        <tr><td>W指名</td><td>￥5,000</td></tr>
        <tr><td>同伴料金</td><td>￥5,000</td></tr>
        <tr><td>延長料金(30分毎)</td><td>￥5,000</td></tr>
        <tr><td>延長料金(60分毎)</td><td>￥9,000</td></tr>
        <tr><td>VIP料金(小ルーム)(Set毎)</td><td>￥10,000</td></tr>
        <tr><td>VIP料金(大ルーム)(Set毎)</td><td>￥20,000</td></tr>
        <tr><td>サービス料</td><td>35%</td></tr>
    </table>
    <div class="price_ex1">
        各種カードがご利用いただけます<br>
        JCB / VISA / AMEX / DINERS / DC / UC / MASTER
    </div>
    <div class="price_ex2">
        ※別途消費税が加算されます。<br>
        ※プライベートサロンのご利用につきまして、現在、特別会員様が<br>
        一定数に達した為、受付を終了致しました。<br>
        現会員様に欠員が出た場合のみ際受付を行います。
    </div>
    <div class="price_ex3">
        当クラブではドレスコードを設けておりますので、<br>
        下記服装でのご入店はお断りさせていただく場合がございます。
    </div>
    <div class="price_ex4">
        ・半ズボン<br>
        ・ダメージジーンズ<br>
        ・ノージャケットのTシャツ<br>
        ・キャップ<br>
        ・サンダル<br>
        ・サングラス<br>
        ※ノージャケットの場合は襟付きのものを着用してください。
    </div>

    <div class="title_div">
        <div class="title_en">営業時間</div>
    </div>
    <table class="access_table">
        <tr><th>営業時間</th><th>定休日</th></tr>
        <tr><td>月～土 PM7:00～LAST</td><td>日曜・祝日</td></tr>
    </table>
    <div class="padding_50">
        <div style="width:315px; height:260px; background-color:gray; margin: auto;"></div>
    </div>
</div>

@endsection




@section('content_sp')

<div class="content_div_bg header_margin_sp">
    <div class="title_div">
        <div class="title_en">Floor/Price</div>
        <div class="title_ja">フロア・料金案内</div>
    </div>
</div>

<div class="content_div">
    <div class="title_floor">Floor</div>
</div>

<div class="content_div_floor">
    <img src="{{ asset('img/floor1.jpg') }}" class="floor_img_sp">
    <div class="floor_text_sp">
        <div class="floor_text_main">ENTRANCE</div>
        <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
    </div>
</div>

<div class="content_div_bg">
    <img src="{{ asset('img/floor2.jpg') }}" class="floor_img_sp">
    <div class="floor_text_sp">
        <div class="floor_text_main">ENTRANCE</div>
        <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
    </div>
</div>

<div class="content_div_floor">
    <img src="{{ asset('img/floor3.jpg') }}" class="floor_img_sp">
    <div class="floor_text_sp">
        <div class="floor_text_main">ENTRANCE</div>
        <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
    </div>
</div>

<div class="content_div_bg">
    <img src="{{ asset('img/floor4.jpg') }}" class="floor_img_sp">
    <div class="floor_text_sp">
        <div class="floor_text_main">ENTRANCE</div>
        <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
    </div>
</div>

<div class="content_div_floor">
    <img src="{{ asset('img/floor5.jpg') }}" class="floor_img_sp">
    <div class="floor_text_sp">
        <div class="floor_text_main">ENTRANCE</div>
        <div class="floor_text_sub">テキストテキストテキスト<br>テキストテキストテキスト<br>テキストテキストテキスト</div>
    </div>
</div>

<div class="content_div">
    <div class="title_floor">Price</div>
    <table class="price_table">
        <tr><th>メンバーお1人様60分</th><th>基本料金</th></tr>
        <tr><td>SET料金</td><td>￥9,000</td></tr>
        <tr><td>指名料金</td><td>￥3,000</td></tr>
        <tr><td>W指名</td><td>￥5,000</td></tr>
        <tr><td>同伴料金</td><td>￥5,000</td></tr>
        <tr><td>延長料金(30分毎)</td><td>￥5,000</td></tr>
        <tr><td>延長料金(60分毎)</td><td>￥9,000</td></tr>
        <tr><td>VIP料金(小ルーム)<br>(Set毎)</td><td>￥10,000</td></tr>
        <tr><td>VIP料金(大ルーム)<br>(Set毎)</td><td>￥20,000</td></tr>
        <tr><td>サービス料</td><td>35%</td></tr>
    </table>
    <div class="price_ex1_sp">各種カードがご利用いただけます</div>
    <div class="price_ex2_sp">JCB / VISA / AMEX / DINERS / DC / UC / MASTER</div>
    <div class="price_ex3_sp">
        ※別途消費税が加算されます。<br>
        ※プライベートサロンのご利用につきまして、現在、特別会員様が<br>
        一定数に達した為、受付を終了致しました。<br>
        現会員様に欠員が出た場合のみ際受付を行います。
    </div>
    <div class="price_ex4_sp">
        当クラブではドレスコードを設けておりますので、<br>
        下記服装でのご入店はお断りさせていただく場合がございます。
    </div>
    <div class="price_ex5_sp">
        ・半ズボン<br>
        ・ダメージジーンズ<br>
        ・ノージャケットのTシャツ<br>
        ・キャップ<br>
        ・サンダル<br>
        ・サングラス<br>
        ※ノージャケットの場合は襟付きのものを着用してください。
    </div>


</div>


<div class="content_div_bg" style="padding:20px 0;">
    <div class="title_div">
        <div class="access_title_sp">営業時間</div>
    </div>
    <table class="access_table">
        <tr><th>営業時間</th><th>定休日</th></tr>
        <tr><td>月～土 PM7:00～LAST</td><td>日曜・祝日</td></tr>
    </table>
    <div style="height:260px; background-color:gray; margin: 20px;"></div>
    <div style="height:260px; background-color:gray; margin: 20px;"></div>

</div>

@endsection