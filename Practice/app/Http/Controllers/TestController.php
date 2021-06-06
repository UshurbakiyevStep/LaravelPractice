<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showHello():object {
        return  view('components/test.show',['var1'=>1,'var2'=>2]);
    }

    public function show($param1,$param2) : string
    {
        return "TestController ".$param1." ".$param2;
    }

    public function sum($num1,$num2) :int {
        return $num1 + $num2;
    }
}
