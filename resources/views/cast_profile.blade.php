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



@endsection