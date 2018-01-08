@extends('layouts.main')

@section('title')
    <title>Emma Melnik</title>
@stop

@section('body')

    <div class="blog-block">
        <a class="back-link" href="{{url('/')}}">на главную</a>
        <div class="overflowed-animation"><h1>Блог</h1></div>

        <div class="container-md row">
            <div class="article-opened-image col-md-5"><img src="{{asset($post->image)}}" height="100%" width="100%"></div>

            <div class="article-opened-text col-md-7">
                <h1>{{$post->title}}</h1>
                <p>{{$post->text}}</p>
            </div>
        </div>
    </div>

@stop