@extends('layout')
 
@section('content')
    <h1>{{ $article->title }}</h1>
    <article>
        <div class="body">{{ $article->body }}</div>
    </article>
 
    <br/>
 
    <div>
        <a>id]) }}"
          class="btn btn-primary"
        >
            編集
        </a>
 
        // 変更
        {!! delete_form(['articles', $article->id]) !!}
 
        <a href="{{ action('ArticlesController@index') }}" class="btn btn-secondary float-right">
            一覧へ戻る
        </a>
    </div>
@endsection

