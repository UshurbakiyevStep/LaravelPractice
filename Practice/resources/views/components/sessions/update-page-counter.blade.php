<div>
    Page was updated: {{$request->session()->get('pageUpdatedCounter')}} times
    <br>
    User visited page for the first time at: {{ $request->session()->get('FirstTimeVisit')}}
    <br>

    Your array : {{print_r($request->session()->get('arr'))}}
</div>
