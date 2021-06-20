<div>
    <!-- He who is contented is rich. - Laozi -->
</div>

<ul>
    @foreach($arrNums as $item)
        <li>{{pow($item,0.5)}}</li>
    @endforeach
</ul>
<hr>
<ul>
    @foreach($arrStrings as $key => $value)
        <li>{{$key+1}}:{{$value}}</li>
    @endforeach
</ul>
<hr>

<ul>
    @foreach($arrNums as $key => $value)
        @if($value % 2 == 0 && $value > 0)
        <li>{{$value}}</li>
        @endif
    @endforeach
</ul>
<hr>
@if(is_array($data))
    <ul>
        @foreach($data as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    @elseif(is_numeric($data))
    <p>{{$data}}</p>

@endif

<hr>
<table>
    @foreach($arrNested as $oArr)
        <tr>
            @foreach($oArr as $item)
                <td>{{$item}}</td>
            @endforeach
        </tr>
    @endforeach
</table>

<hr>

<ul>
    @foreach($employees as $employee)
        <li>Name:{{$employee['name']}}</li>
        <li>Surname:{{$employee['surname']}}</li>
        <li>Salary:{{$employee['salary']}}</li>
        <br>
    @endforeach
</ul>
<table>
    @foreach($employees as $employee)
        <tr>
            @foreach($employee as $key=>$value)
                <td>{{$key}}:{{$value}}</td>
            @endforeach
        </tr>
    @endforeach
</table>

<ul>
    @foreach($arrStrings as $string)

        @if($loop->first)

          @php  $cssClass = "first"; echo $cssClass;@endphp
            @elseif($loop->last)
            @php $cssClass = "last"; echo $cssClass;@endphp

        @endif

        <li class=$cssClass>{{$loop->iteration }}:{{$string}}</li>
    @endforeach
</ul>

<ul>
    @foreach($arrNums as $num)
        @if($loop->remaining < 3)
            <i>{{$num}}</i>
            @else
            <b>{{$num}}</b>
        @endif
            <br>
    @endforeach
</ul>

<ul>
    @foreach($arrNums as $num)

            <b>{{$num}}</b>
          @break($loop->remaining == 3)
    @endforeach
</ul>

<ul>
    @foreach($arrNums as $num)

        @continue($loop->remaining == 3)
        <b>{{$num}}</b>

    @endforeach

    @forelse($arrStr as $string)
        <p>{{$string}}</p>
        @empty
        <p>Нет строк в массиве</p>
        @endforelse
</ul>

@for($i =0 ; $i < 10; $i++)
    @for($j = 0;$j < 10; $j++)
        {{$j+1}}
    @endfor
    <br>
@endfor
