@extends('layouts.main')

@section('title')
    <title>Emma Melnik</title>
@stop

@section('body')

    <div class="blog-block">
        <a class="back-link" href="{{url('/')}}">на главную</a>
        <div class="overflowed-animation"><h1>Блог</h1></div>

        <div class="container-md space-btw">
            @foreach($posts as $post)
            <div class="article-holder">
                <div class="article-image">
                    <img src="{{asset($post->image)}}">
                </div>

                <p class="date-holder">{{$post->title}}</p>
                <div class="article-short-text">
                    <span>{{$post->text}}</span>
                </div>
                <a href="{{url('article', $post->id)}}" class="more-link">Читать...</a>
            </div>
            @endforeach
        </div>
    </div>

@stop