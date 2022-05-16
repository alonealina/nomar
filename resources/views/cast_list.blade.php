@extends('layouts.app')

@section('content')
<div class="content_div_bg header_margin">
    <div class="title_div">
        <div class="title_en">Cast List</div>
        <div class="title_ja">キャスト一覧</div>
        <div class="insta_ex">
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

</div>


@endsection




@section('content_sp')


<div class="content_div header_margin_sp">
    <div class="title_div">
        <div class="title_en">Cast List</div>
        <div class="title_ja">
            キャスト一覧<br><br><br>
            CLUB NOMARキャストのご紹介です。<br>
            ごく一部のご紹介になります。<br>
            ここではご紹介されていない一流の美女キャストが<br>
            皆様のご来店をお待ちしています。
        </div>
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