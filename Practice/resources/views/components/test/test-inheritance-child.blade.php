@includeIf('layouts.elems.footer-sub-pattern-for-test-inheritance')
@includeIf('layouts.elems.header-sub-pattern-for-test-inheritance')

@extends('layouts.test-inheritance-parent')


@section('aside')
    @parent
    <p>{{$aside}}</p>
@endsection

@section('main')
    @parent
    <p>ChildMain</p>
@endsection


