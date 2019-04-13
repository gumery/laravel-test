@extends('app')

@section('content')

<h1>文章<h1>
<div><a href="{{ url('article/create') }}">创建新文章</a></div>
<hr/>
@foreach ($articles as $article)
    <h2><a href="{{ url('article', $article->id) }}">{{ $article->title }}</a></h2>
    <article>{{ $article->content}} </article>
@endforeach

@stop
