<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormsOneController extends Controller
{


    public function squareForm(Request $request) {
        if ($request->has('number1') && $request->has('number2')){
            self::squareResponse($request->number1,$request->number2);
        }else {
            return view('components/forms-one');
        }
    }
    public static function squareResponse($num1,$num2){
        var_dump($num1 + $num2);
    }

    public function form() {
        return view('components/forms-two-form');
    }
    public static function result(Request $request){

        return view('components/forms-two-result',['num1'=>$request->num1,'num2'=>$request->num2,'num3'=>$request->num3]);
    }
}
