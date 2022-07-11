@extends('layouts.admin')
@section('title', 'ホーム')

@section('content')
    <div class="container">

        <div class="create">
            <div class="">
                <h2>ホーム</h2>
                <form action="{{ action('Admin\SnsController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="">
                        <div class="">
                            <textarea class="form-control" name="body" rows="2" placeholder="いまどうしてる？">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                </form>
            </div>
        </div>



        <div class="posts">
            <ul class="post-list">
                @foreach($allposts as $post)
                <li>
                    <div class="data01">

                        <!-- つぶやきのuser名をusersテーブルから取得 -->
                        <span>{{ $post->user->name }}</span>
                        <!-- <span>{{ $post->created_at }}</span> -->
                        <span>{{ $post->created_at->format('Y/m/d H:i') }}</span>

                    </div>
                    <div class="data02">
                        <span>{{ $post->body }}</span>

                        <!-- ログインしているユーザーIDとつぶやき投稿のユーザーIDが一致した場合 -->
                        @if (Auth::user()->id === $post->user_id)
                        <a class="delete-button" href="{{ action('Admin\SnsController@postDelete', ['id' => $post->id]) }}">削除</a>
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
        </div>





    </div>
@endsection