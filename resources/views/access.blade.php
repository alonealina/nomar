@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="title_div">
        <div class="title_en">Access</div>
        <div class="title_ja">CLAB NOMARへのアクセス</div>
    </div>
    <div class="access_div">
        <div class="access_detail">
            <div class="access_column">
                <span class="access_span">住所</span>大阪市北区堂島1-2-7-2階
            </div>
            <div class="access_column">
                <span class="access_span">電話番号</span>06-6225-8098
            </div>
            <div class="access_column" style="border-bottom:1px solid #DBA57C;">
                <span class="access_span">電車でお越しの方</span>JR東西線北新地駅
            </div>
        </div>
    </div>
    <table class="access_table">
        <tr><th style="border-right:1px dashed #FFF;">営業時間</th><th>定休日</th></tr>
        <tr><td>月～土 PM7:00～LAST</td><td>日曜・祝日</td></tr>
    </table>
    <div class="padding_50">
    <iframe style="margin: auto; display: block; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.352315310535!2d135.4969557155322!3d34.696292690961485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ee7c29c817%3A0xd3a80e02a4b5eaf4!2z44CSNTMwLTAwMDMg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65aCC5bO277yR5LiB55uu77yS4oiS77yX!5e0!3m2!1sja!2sjp!4v1652246916607!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


@endsection




@section('content_sp')

<div class="content_div header_margin_sp">
    <div class="title_div">
        <div class="title_en">Access</div>
        <div class="title_ja">アクセス</div>
    </div>
</div>

<div class="content_div_bg" style="padding-bottom:50px">
    <div class="access_title_sp">アクセス</div>
    <table class="access_table_sp">
        <tr><td>電話番号</td><td>06-6225-8098</td></tr>
        <tr><td>住所</td><td>大阪市北区堂島1-2-7-2階</td></tr>
        <tr><td>電車でお越しの方</td><td>JR東西線北新地駅</td></tr>
    </table>
    <div class="access_title_sp">営業時間</div>
    <table class="access_table">
        <tr><th style="border-right:1px dashed #FFF;">営業時間</th><th>定休日</th></tr>
        <tr><td>月～土 PM7:00～LAST</td><td>日曜・祝日</td></tr>
    </table>
    <div style="margin-top:30px;">
    <iframe style="margin: auto; display: block; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.352315310535!2d135.4969557155322!3d34.696292690961485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ee7c29c817%3A0xd3a80e02a4b5eaf4!2z44CSNTMwLTAwMDMg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65aCC5bO277yR5LiB55uu77yS4oiS77yX!5e0!3m2!1sja!2sjp!4v1652246916607!5m2!1sja!2sjp" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>


@endsection