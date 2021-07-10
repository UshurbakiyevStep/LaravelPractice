@foreach($arr as $item)
    <ul>
        <li><a href="http://{{$item['href']}}">{{$item['text']}}</a></li>
    </ul>

@endforeach
@php
    $ctr = 0;
@endphp

<th>ID</th>
<th>Имя</th>
<th>Фамилия</th>
<th>Зарплата</th>

@foreach($employees as $item)

@php
    $ctr++;
@endphp

@if($item['salary'] > 2000)
    <table>
        <tr>
            <td><span>{{$ctr}}</span></td>
            <td>{{$item['name']}}</td>
            <td>{{$item['surname']}}</td>
            <td>{{$item['salary']}}</td>
        </tr>
    </table>
@endif

@endforeach
<br/>

<tr>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Статус</th>
</tr>

@foreach($users as $item)
    <table>
        @if($item['banned'])
            @php
            $color = 'red';
            @endphp
        @else
            @php
                $color = 'green';
            @endphp
        @endif

        <tr style="color:{{$color}}">
            <td>{{$item['name']}}</td>
            <td>{{$item['surname']}}</td>
            @if(!$item['banned'])
            <td>Активен</td>
            @else
                <td>Забанен</td>
            @endif
        </tr>

    </table>

@endforeach

@foreach ($arr as $item)
    <label>
        <input value = "{{$item['text']}}">
        <br>
    </label>
@endforeach
<br>

<label>
    <select>
@foreach($arr as $item)
            <option>
                {{$item['text']}}
            </option>
@endforeach
    </select>
</label>

<table>
    @foreach($month as $calendarDay)
    <ul>
        @if($calendarDay == $day)
            @php
            $class = 'active';
            $color = 'green'
            @endphp
        @else
            @php
            $class = '';
            $color = 'blue';
            @endphp
        @endif

        <li class = "{{$class}}" style="color:{{$color}}">{{$calendarDay}}</li>
    </ul>
    @endforeach
</table>
