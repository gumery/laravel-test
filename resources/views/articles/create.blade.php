@extends('app')

@section('content')

    <h1>撰写新文章</h1>
    <hr/>
    {!! Form::open(['url' => 'article/store']) !!}
        <div class="form-group">
        {!! Form::label('title', '标题：')!!}
        {!! Form::text('title', '', ['class' => 'form-controll', 'placeholder' => '请输入标题']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('content', '内容：')!!}
        {!! Form::textarea('content', '', ['class' => 'form-controll', 'placeholder' => '请输入内容']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('published_time', '发布时间：')!!}
        {!! Form::input('date', 'published_time', date('Y-m-d'), ['class' => 'form-controll']) !!}
        </div>

        <div class="form-group">
        {!! Form::submit('发表文章', ['class' => 'btn btn-success form-control'])!!}
        </div>
    {!! Form::close() !!}
<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@stop
