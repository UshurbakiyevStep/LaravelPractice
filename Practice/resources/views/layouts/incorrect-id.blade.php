@extends('layouts.postlayout')

@section('title')
    Станицы с id:{{$id}} не существует!
@endsection

@section('main')
<div class="text">
    Извините, страницы id:{{$id}} не существует!
</div>
@endsection
