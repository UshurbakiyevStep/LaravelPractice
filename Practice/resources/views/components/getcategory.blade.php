@extends('layouts.prodlayout')
@section('title')
   Продукты категории:{{$category['name']}}
@endsection

@php
    $prodId = 0;
@endphp

@section('main')
    <table>
        <tr>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Наличие</th>
            <th>Описание</th>
        </tr>
        @foreach($category['products'] as $item)
            @php
                $prodId++;
            @endphp
            <tr>
                <td><a href="/product/{{$catId}}/{{$prodId}}">{{$item['name']}}</a></td>
                <td>{{$item['cost']}}</td>
                <td>{{$item['inStock'] ? "В наличии" : "Не в наличии"}}</td>
                <td>{{$item['desc']}}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <button>  <a href="/categories">Список категорий</a></button>
@endsection

