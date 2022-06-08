@extends('layouts.app_admin')

@section('content')

<a href="{{ route('admin.news_list') }}"><img src="{{ asset('img/genre_list_btn.png') }}" class=""></a>


<div class="news_list">
    <div class="news_list_column border_bottom_column">
        <div class="news_list_date">
            <div class="news_item_left">ジャンル編集</div>
        </div>
    </div>
    <form id="form" name="edit_form" action="{{ route('admin.genre_update') }}" method="post" enctype="multipart/form-data">
        {{ Form::hidden('id', $genre->id) }}
        @if($errors->has('name'))
        <div class="comment_error">{{ $errors->first('name') }}</div>
        @endif

        @csrf
        <div class="flex_form_item flex_news_title">
            <div class="felx_form_title">ジャンル名</div>
            <div class="felx_form_content">
                {{ Form::text('name', old('name', $genre->name), ['class' => 'form-control news_title_input', 'maxlength' => 20]) }}
            </div>
        </div>

        <div class="d-flex justify-content-center news_paginate" style="border-top:none;">
            <a href="#" onclick="clickEditButton()"><img src="{{ asset('img/genre_update_btn.png') }}" class="regist_button"></a>
        </div>

    </form>
</div>


@endsection


@section('content_ipad')

@endsection

