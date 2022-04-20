@extends('layouts.app')

@section('content')
<div class="content_div header_margin">
    <div class="title_div">
        <div class="title_en">Cast Plofile</div>
        <div class="title_ja_black">キャスト紹介　AMANE - あまね -</div>
    </div>
    <div class="cast_img_div">
        <img src="{{ asset('img/cast1.jpg') }}" class="cast_img_main">
        <div class="cast_img_list">
            @php
            $count = 1;
            @endphp
            @while ($count < 10)
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_img_sub cast_img_sub{{ $count++ }}">
            @endwhile
        </div>
    </div>
</div>

<div class="content_div_bg padding_50">
    <div class="profile_en">AMANE PROFILE</div>
    <div class="profile_ja">あまね　プロフィール</div>

</div>


<div class="content_div">
    <div class="title_div">
        <div class="title_en">Cast List</div>
        <div class="title_ja_black">キャスト一覧</div>
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
</div>

@endsection




@section('content_sp')

<div class="content_div header_margin_sp">
    <div class="cast_name_sp">
        <span class="cast_name_1">キャスト紹介</span> <span class="cast_name_2">AMANE</span>  <span class="cast_name_1">-あまね-</span>
    </div>
    <img src="{{ asset('img/cast1.jpg') }}" class="cast_img_main_sp">
    <div class="cast_list_div_sp">
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
        </div>
    </div>
</div>

<div class="content_div_bg" style="padding-bottom:50px">
    <div class="title_div">
        <div class="cast_prof_en">AMANE PROFILE</div>
        <div class="cast_prof_ja">あまね　プロフィール</div>
    </div>
    <table class="cast_table">
        <tr><td>出身</td><td>福岡県</td></tr>
        <tr><td>血液型</td><td>B型</td></tr>
        <tr><td>趣味・特技</td><td>ワイン</td></tr>
        <tr><td>好きな食べ物</td><td>好きな食べ物</td></tr>
    </table>
</div>


<div class="content_div">
    <div class="title_div">
        <div class="title_en">Cast List</div>
        <div class="title_ja">キャスト一覧</div>
    </div>

    <div class="cast_list_div_sp">
        <div class="cast_list_item_sp">
            <a href="{{ route('cast_profile') }}">
                <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
                <div class="cast_list_name_sp">AMANE<br>あまね</div>
            </a>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
        <div class="cast_list_item_sp">
            <img src="{{ asset('img/cast1.jpg') }}" class="cast_list_img_sp">
            <div class="cast_list_name_sp">AMANE<br>あまね</div>
        </div>
    </div>

</div>



@endsection