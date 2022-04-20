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
                <span class="access_span">住所</span>大阪市北区曽根埼北新地
            </div>
            <div class="access_column">
                <span class="access_span">電話番号</span>06-0000-0000
            </div>
            <div class="access_column" style="border-bottom:1px solid #DBA57C;">
                <span class="access_span">電車でお越しの方</span>JR東西線北新地駅
            </div>
        </div>
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

<div class="content_div header_margin_sp">
    <div class="title_div">
        <div class="title_en">Access</div>
        <div class="title_ja">アクセス</div>
    </div>
</div>

<div class="content_div_bg" style="padding-bottom:50px">
    <div class="access_title_sp">アクセス</div>
    <table class="access_table_sp">
        <tr><td>電話番号</td><td>06-0000-0000</td></tr>
        <tr><td>住所</td><td>大阪市北区曽根埼北新地</td></tr>
        <tr><td>電車でお越しの方</td><td>JR東西線北新地駅</td></tr>
    </table>
    <div class="access_title_sp">営業時間</div>
    <table class="access_table">
        <tr><th>営業時間</th><th>定休日</th></tr>
        <tr><td>月～土 PM7:00～LAST</td><td>日曜・祝日</td></tr>
    </table>
    <div style="height:260px; background-color:gray; margin: 20px;"></div>
    <div style="height:260px; background-color:gray; margin: 20px;"></div>

</div>


@endsection