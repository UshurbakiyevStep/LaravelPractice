<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsPostController extends Controller
{
    public function forms()
    {
        return view('components/forms-post-form');
    }

    public function result(Request $request)
    {
        echo $request->method() . PHP_EOL;
        if ($request->isMethod('POST')) {
            echo "!!";
        } else if ($request->isMethod('GET')) {
            echo "!";
        }
        return view('components/forms-post-result', ['text' => $request->text]);
    }

    public function formNum(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('components/forms-ask-numbers_ex');
        }
        if ($request->isMethod('post')) {
            return view('components/forms-ask-numbers_ex_result', ['num1' => $request->num1, 'num2' => $request->num2]);
        }
    }
}
