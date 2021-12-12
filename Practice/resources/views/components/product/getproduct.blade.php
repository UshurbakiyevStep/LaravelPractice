@extends('layouts.prodlayout')

@section('title')
    {{$product['name']}}
@endsection

@section('main')
    <table>
        <tr>
            <th>
                Категория
            </th>
            <th>
                Имя
            </th>
            <th>
                Цена
            </th>
            <th>
                В наличии
            </th>

            <th>
                Описание
            </th>
        </tr>
        <tr>
            <td><a href="/category/{{$catId}}">{{$product['name']}}</a></td>
            <td>{{$product['products'][$prodId]['name']}}</td>
            <td>{{$product['products'][$prodId]['cost']}}</td>
            <td>{{$product['products'][$prodId]['inStock'] ? 'В наличии' : 'Нет в наличии'}}</td>
            <td>{{$product['products'][$prodId]['desc']}}</td>
        </tr>
    </table>
    <br>
    <button>  <a href="/categories">Список категорий</a></button>


@endsection
