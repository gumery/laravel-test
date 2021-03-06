@extends('app')

@section('content')
<h1>文章列表</h1>
<br/>
<div><a href="{{ url('article/create') }}">创建新文章</a></div>
<hr/>

@if (!count($articles))
<div style="text-algin:cener;">暂无数据</div>
@else
@foreach ($articles as $article)
<article class="format-image group">

    <h2 class="post-title pad">

        <a href="{{ url('/article', $article->id) }}"> {{ $article->title }}</a>

    </h2>

    <div class="post-inner">

        <div class="post-deco">

            <div class="hex hex-small">

                <div class="hex-inner"><i class="fa"></i></div>

                <div class="corner-1"></div>

                <div class="corner-2"></div>

            </div>

        </div>

        <div class="post-content pad">

            <div class="entry custome">

                {{ $article->intro }}

            </div>

            <a class="more-link-custom" href="/article/{{ $article->id }}"><span><i>更多</i></span></a>

        </div>

    </div>

</article>
@endforeach
@endif
@stop
