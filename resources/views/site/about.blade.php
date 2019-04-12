@extends('app') 
@section('content')   
    <div class="flex-center position-ref full-height">
            <h1>Hello <?=$value?></h1>
            <h1>Hello {{$name}}</h1>
            <h1>Hello {!! $name !!}</h1>
        </div>
@stop
