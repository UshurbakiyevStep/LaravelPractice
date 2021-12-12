@extends('layouts.prodlayout')

@section('title','Список всех категорий')

@section('main')
    <table>
        <tr>
            <th>Категория</th>
            <th>Кол-во продуктов</th>
        </tr>

        @php
        $catId=0;
        @endphp

        @foreach($categories as $category)
            @php
            $catId++;
            @endphp

            <tr>
                <td><a href="category/{{$catId}}">{{$category['name']}}</a></td>
                <td>{{count($categories[$catId]['products'])}}</td>
            </tr>
        @endforeach

    </table>
@endsection
