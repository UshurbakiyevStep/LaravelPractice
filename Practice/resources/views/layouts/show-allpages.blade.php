@extends('layouts.postlayout')

@section('title')
    Список страниц
@endsection

@php
    $id = 1;
@endphp

@section('main')
@foreach($info as $item)

<div class="post">
    <h2>{{$item['title']}}</h2>
    <div class="info">
        <span class="date">{{$item['date']}}</span>
        <span class="author">{{$item['author']}}</span>
    </div>
    <div class="text">
        {{$item['teaser']}}
    </div>
    <div class="more">
        <a href="post/{{$id}}">Подробнее...</a>
    </div>
</div>

@php
    $id++;
@endphp

@endforeach
@endsection

