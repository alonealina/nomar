@extends('layouts.app_admin')

@section('content')

<a href="{{ route('admin.news_list') }}"><img src="../../img/newslist_button.png" class=""></a>


<div class="news_list">
    <div class="news_list_column border_bottom_column">
        <div class="news_list_date">
            <div class="news_item_left">NEWS一覧</div>
        </div>
    </div>
    <form id="form" name="regist_form" action="{{ route('admin.news_store') }}" method="post" enctype="multipart/form-data">
        @if($errors->has('title'))
        <div class="comment_error">{{ $errors->first('title') }}</div>
        @endif
        @if($errors->has('content'))
        <div class="comment_error">{{ $errors->first('content') }}</div>
        @endif

        @csrf
        <div class="flex_form_item flex_news_title">
            <div class="felx_form_title">タイトル</div>
            <div class="felx_form_content">
                {{ Form::text('title', old('title'), ['class' => 'form-control news_title_input', 'maxlength' => 20]) }}
            </div>
        </div>

        <div class="flex_form_item flex_news_content">
            <div class="felx_form_title">内容</div>
            <div class="felx_form_content">
                {{ Form::textarea('content', old('content'), ['class' => 'form-control news_content_input', 'rows' => 10, 'maxlength' => 3000]) }}
            </div>
        </div>

        <div class="flex_form_item flex_news_content">
            <div class="felx_form_title">ジャンル</div>
            <div class="felx_form_content">
                <select name="genre_id">
                    @foreach ($genre_list as $genre)
                    <option value="{{ $genre->id }}"
                        @if(old('genre_id') == $genre->id) selected @endif >{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex_form_item flex_news_content">
            <div class="felx_form_title">公開設定</div>
            <div class="felx_form_content">
                <select name="release">
                    <option value="1" @if(old('release') == 1) selected @endif >公開</option>
                    <option value="none" @if(old('release') == 'none') selected @endif >非公開</option>
                </select>
            </div>
        </div>
        <div class="flex_form_item flex_news_content">
            <div class="felx_form_title">画像</div>
            <div class="felx_form_content">
                <div class="regist_file_button"><input type="file" id="file_btn_main" accept="image/*" onclick="fileCheckMain();" name="img"></div>
                <div class="img_tmb_main" style="max-width: 300px; margin: 30px 0;"></div>
            </div>
        </div>
        <div class="d-flex justify-content-center news_paginate">
            <a href="#" onclick="clickRegistButton()"><img src="../../img/regist_button.png" class="regist_button"></a>
        </div>

    </form>
</div>


@endsection


@section('content_ipad')

@endsection

