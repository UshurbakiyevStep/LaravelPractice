<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

    <p>Name: {{$arr['name']}}</p>

    <p style="color:
         @php
            echo "red";
        @endphp
        ">
        Age: {{$arr['age']}}</p>

    <p>Salary: {{$arr['salary']}}</p>

    <p>Count-Elements: {{count($arr)}}</p>

    <p>City: {{!isset($arr['city'])?'Moscow' :$arr['city']}}</p>

    <p>Country-location: {{!isset($location['country'])?'Russia':$location['country']}}</p>

    {{--<p>City-Location: {{!isset($location['city'])?'Moscow':$location['city']}}</p>--}}

    <p>Year:{{!isset($year)?date('y'): $year}}</p>
    <p>Month:{{!isset($month)?date('m'):$month}}</p>
    <p>Day:{{!isset($day)?date('D'):$day}}</p>

    {!! $str !!}


</div>
