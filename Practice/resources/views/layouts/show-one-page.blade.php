@extends('layouts.postlayout')

@section('title',$info['title'])

@section('main')
<div class="info">
    <span class="date">{{$info['date']}}</span>
    <span class="author">{{$info['author']}}</span>
</div>
<div class="text">
    {{$info['text']}}
</div>
@endsection
