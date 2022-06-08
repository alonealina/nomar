@extends('layouts.app_admin')

@section('content')

<div class="button_list_index">
    <a href="{{ route('admin.genre_regist') }}"><img src="{{ asset('img/genre_regist_btn.png') }}" class=""></a>
    <a href="{{ route('admin.logout') }}" class="logout_button"><img src="{{ asset('img/logout_button.png') }}" class=""></a>
</div>

<div class="news_list">
    <div class="news_list_column border_bottom_column">
        <div class="genre_list_name">
            <div class="news_item_left">ジャンル一覧</div>
        </div>
        <div class="news_list_buttonlist">
            <div class="news_item_name_10px">操作</div>
        </div>
    </div>
    @foreach($genre_list as $genre)
    <div class="news_list_column">
        <div class="genre_list_name">
            <div class="news_item_left">{{ $genre->name }}</div>
        </div>
        <div class="news_list_button">
            <a href="{{ route('admin.genre_edit', ['id' => $genre['id']]) }}"><img src="{{ asset('img/edit_button.png') }}" class="edit_button"></a>
        </div>
        <div class="news_list_button">
            <a href="{{ route('admin.genre_delete', ['id' => $genre['id']]) }}" onclick="return confirm('本当に削除しますか？')"><img src="{{ asset('img/delete_button.png') }}" class="delete_button"></a>
        </div>
    </div>
    @endforeach

</div>



@endsection